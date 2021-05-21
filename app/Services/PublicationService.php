<?php

namespace App\Services;

use App\Http\Requests\Publication\PublicationRequest;
use Ramsey\Uuid\Uuid;
use App\Models\Publications\Publication;
use DOMDocument;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Illuminate\Support\Str;

class PublicationService
{
    /**
     * @param string $type 'avatar' or 'header_background_image'
     *  */
    public function uploadImage($user, $type)
    {
        if ($type == 'avatar') {
            $dirName = 'avatar';
            $this->createDir($dirName);
            if ($user->avatar) {
                $path = public_path() . '\\' . $dirName . '\\' . $user->avatar;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $newFileName = $this->moveFileInDirectory('avatar', '.jpg', $dirName);
            $user->avatar = $newFileName;
        } else if ($type == 'header_background_image') {
            $dirName = 'background_image';
            $this->createDir($dirName);
            if ($user->header_background_image) {
                $path = public_path() . '\\' . $dirName . '\\' . $user->header_background_image;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $newFileName = $this->moveFileInDirectory('header_background_image', '.jpg', $dirName);
            $user->header_background_image = $newFileName;
        }
    }

    /**
     * delete publication and publication files
     *
     * @param string $id publication id
     *
     * @return void
     */
    public function handleDeletePublication($id)
    {
        $publication = Publication::find($id);
        $this->deletePicturesFromDirectoryByTags($publication->description);
        $publication->delete();
    }

    /**
     * @param string $publicationRequest data of publication
     *
     * @param string $user_id publication by user id
     *
     * @return Publication created publication
     */
    public function handleCreatePublication(PublicationRequest $publicationRequest, $user_id)
    {
        $previewImage   = null;
        if ($publicationRequest->preview_image) {
            $previewImage = $this->moveFileInDirectory('preview_image');
        }
        $previewText    = $publicationRequest->preview_text;

        $title          = $publicationRequest->title;
        $slug           = Str::slug($title);
        if (isset($publicationRequest->is_published)) {
            $isPublished    = $publicationRequest->is_published;
        } else {
            $isPublished = true;
        }

        $description = $this->grapPicturesFromTheText($publicationRequest->description);

        $publishedAt    = null;
        if ($isPublished) {
            $publishedAt = now();
        }

        $newPublication = Publication::create([
            'slug'          => $slug,
            'preview_image' => $previewImage,
            'preview_text'  => $previewText,
            'title'         => $title,
            'description'   => $description,
            'is_published'  => $isPublished,
            'published_at'  => $publishedAt,
            'user_id'       => $user_id,
        ]);

        return $newPublication;
    }

    /**
     * @param string $publicationRequest data of publication
     *
     * @param string $id publication id
     *
     * @param string $user_id if null then use old publicaton user id
     *
     * @return void edited publication
     */
    public function handleEditPublication(PublicationRequest $publicationRequest, $id, $user_id = null)
    {
        $oldPublication = Publication::find($id);

        $path = public_path() . '\\' . 'upload' . '\\';

        $newFileName = null;

        //preview image
        if ($publicationRequest->preview_image) {
            if ($oldPublication->preview_image) {
                unlink($path . $oldPublication->preview_image);
            }
            $newFileName = $this->moveFileInDirectory('preview_image');
        }
        if ($oldPublication->preview_image && $publicationRequest->is_delete_preview_image) {
            unlink($path . $oldPublication->preview_image);
        }
        $oldPublication->preview_image  = $newFileName;

        //description
        $this->deletePicturesFromDirectoryByTags($oldPublication->description);
        $description = $this->grapPicturesFromTheText($publicationRequest->description);
        $oldPublication->description    = $description;

        //etc
        $oldPublication->title          = $publicationRequest->title;
        $oldPublication->slug           = Str::slug($publicationRequest->title);
        $oldPublication->preview_text   = $publicationRequest->preview_text;


        if ($user_id) {
            $oldPublication->user_id = $user_id;
        }
        if (isset($publicationRequest->is_published)) {
            $oldPublication->is_published   = $publicationRequest->is_published;
            if ($publicationRequest->is_published && !$oldPublication->published_at) {
                $oldPublication->published_at = now();
            }
        } else {
            $oldPublication->is_published = true;
        }
        $oldPublication->save();
    }

    /**
     * function move uploaded image in directory
     *
     * @param string $fileName uploaded file name
     *
     * @param string $fileExtension examples: '.jpg', '.png', '.txt'
     *
     * @param string $dir_name directory for uploaded file
     *
     * @param string $newFileName if $newFileName == null then generate new unique uuidv4 name
     *
     * @return string get new file name from the moved directory
     */
    public function moveFileInDirectory($fileName, $fileExtension = '.jpg', $dir_name = "upload",  $newFileName = null)
    {
        if (!$newFileName) {
            $newFileName = $this->getFileNameUuid4($fileExtension);
        }
        $path = public_path() . '\\' . $dir_name . '\\' . $newFileName;
        $isMovedFile = move_uploaded_file($_FILES[$fileName]['tmp_name'], $path);
        if (!$isMovedFile) {
            throw new FileException('The image has not been moved');
        }
        return $newFileName;
    }
    /**
     * function find all path pictures in img tags and delete pictures by src imgs
     *
     * @param string $html markup HTML
     *
     * @return void
     */
    public function deletePicturesFromDirectoryByTags($html)
    {
        $doc = new DOMDocument();
        @$doc->loadHTML($html);
        $imgs = $doc->getElementsByTagName('img');

        foreach ($imgs as $img) {
            $path = public_path() . '\\' . $img->getAttribute('src');
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    /**
     * function grap image files (from the html text), save and return html text with image links
     *
     * @param string $description html text with images
     *
     * @param string $dir_name the name of the directory for folding images
     *
     * @param string $filesExtension extension images
     *
     * @return string html text with image links
     */
    public function grapPicturesFromTheText($description, $dir_name = "upload", $filesExtension = '.jpg')
    {
        $dom = new \DomDocument();
        $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        if (!$images) {
            return $description;
        }

        foreach ($images as $img) {
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $public_path = public_path();
            $this->createDir($public_path . '\\' . $dir_name);
            $image_name = '/' . $dir_name . '/' . $this->getFileNameUuid4($filesExtension);
            $path = $public_path . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $description = $dom->saveHTML();
        return $description;
    }

    /**
     * create dir if path not exist
     *
     * @param string $path
     *
     * @return void
     */
    public function createDir($path)
    {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }

    /**
     * get unique name with file extension
     *
     * @param string $fileExtension examples: '.jpg', '.png', '.txt'
     *
     * @return string
     */
    public function getFileNameUuid4($fileExtension)
    {
        $uuid = Uuid::uuid4();
        return $uuid . $fileExtension;
    }
}

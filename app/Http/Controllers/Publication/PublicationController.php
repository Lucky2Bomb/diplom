<?php

namespace App\Http\Controllers\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Publication\PublicationRequest;
use App\Models\Publications\Publication;
use App\Services\PublicationService;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    protected PublicationService $publicationService;

    public function __construct(PublicationService $publicationService)
    {
        $this->publicationService = $publicationService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type_published = "published")
    {

        $user = auth()->user();
        $publications = null;
        if (!$type_published || $type_published == "published") {
            $publications = Publication::select(
                'id',
                'slug',
                'title',
                'preview_image',
                'preview_text',
                'published_at',
                'user_id',
                'is_published'
            )->where('user_id', $user->id)

                ->where('is_published', true)

                ->orderByDesc('created_at')
                ->paginate(16);
        } else if ($type_published == "notPublished") {
            $publications = Publication::select(
                'id',
                'slug',
                'title',
                'preview_image',
                'preview_text',
                'published_at',
                'user_id',
                'is_published'
            )->where('user_id', $user->id)

                ->where('is_published', false)

                ->orderByDesc('created_at')
                ->paginate(16);
        } else {
            $publications = Publication::select(
                'id',
                'slug',
                'title',
                'preview_image',
                'preview_text',
                'published_at',
                'user_id',
                'is_published'
            )->where('user_id', $user->id)
                ->orderByDesc('created_at')
                ->paginate(16);
        }
        $currentPage = $publications->currentPage();
        $pageSize = $publications->perPage();
        // return view('news.index', ['news' => $news, 'currentPage' => $currentPage, 'pageSize' => $pageSize, 'type_published' => $type_published]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publication = new Publication();

        return view('news.edit', ['news' => $publication, 'isCreate' => true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {
        $user = auth()->user();
        $publication = $this->publicationService->handleCreatePublication($request, $user->id);
        return redirect()->route('publications.show', ['id' => $publication->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);
        return view('news.show', ['news' => $publication, 'edit_route' => 'publications.edit'])->with('slug', $publication->slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Publication::findOrFail($id);
        return view('news.edit', ['news' => $publication, 'isCreate' => false]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PublicationRequest $request, $id)
    {
        $this->publicationService->handleEditPublication($request, $id);

        $publication = Publication::findOrFail($id);
        return redirect()->route('publications.show', ['id' => $publication->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->publicationService->handleDeletePublication($id);
        return redirect()->route('publications');
    }
}

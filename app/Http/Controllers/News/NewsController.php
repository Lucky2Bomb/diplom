<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\Publication\PublicationRequest;
use App\Models\Publications\Publication;
use App\Models\User;
use App\Services\PublicationService;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Ramsey\Uuid\Uuid;

class NewsController extends Controller
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
    public function index($type_published = 'published')
    {
        $userNews = User::where('login', '=', 'news')->firstOrFail();
        $news = null;
        if (!$type_published || $type_published == "published") {
            $news = Publication::select(
                'id',
                'slug',
                'title',
                'preview_image',
                'preview_text',
                'published_at',
                'user_id',
                'is_published'
            )->where('user_id', $userNews->id)

                ->where('is_published', true)

                ->orderByDesc('created_at')
                ->paginate(16);
        } else if ($type_published == "notPublished") {
            $news = Publication::select(
                'id',
                'slug',
                'title',
                'preview_image',
                'preview_text',
                'published_at',
                'user_id',
                'is_published'
            )->where('user_id', $userNews->id)

                ->where('is_published', false)

                ->orderByDesc('created_at')
                ->paginate(16);
        } else {
            $news = Publication::select(
                'id',
                'slug',
                'title',
                'preview_image',
                'preview_text',
                'published_at',
                'user_id',
                'is_published'
            )->where('user_id', $userNews->id)
                ->orderByDesc('created_at')
                ->paginate(16);
        }
        $currentPage = $news->currentPage();
        $pageSize = $news->perPage();
        return view('news.index', ['news' => $news, 'currentPage' => $currentPage, 'pageSize' => $pageSize, 'type_published' => $type_published]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = new Publication();
        return view('news.edit', ['news' => $news, 'isCreate' => true]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationRequest $request)
    {
        $userNews = User::where('login', '=', 'news')->firstOrFail();
        $news = $this->publicationService->handleCreatePublication($request, $userNews->id);
        return redirect()->route('news.show', ['id' => $news->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = Publication::findOrFail($id);
        $comments = $news->publicationComments()->paginate(20);
        return view('news.show', ['news' => $news, 'edit_route' => 'publications.edit', 'comments' => $comments])->with('slug', $news->slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = Publication::findOrFail($id);
        return view('news.edit', ['news' => $news, 'isCreate' => false]);
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
        $userNews = User::where('login', '=', 'news')->firstOrFail();
        $this->publicationService->handleEditPublication($request, $id, $userNews->id);

        $news = Publication::findOrFail($id);
        return redirect()->route('news.show', ['id' => $news->id]);
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
        return redirect()->route('news');
    }
}

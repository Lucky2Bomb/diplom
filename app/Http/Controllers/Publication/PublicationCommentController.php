<?php

namespace App\Http\Controllers\Publication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Publication\PublicationCommentRequest;
use App\Models\Publications\Publication;
use App\Models\Publications\PublicationComment;
use App\Models\Publications\PublicationNotification;
use Illuminate\Http\Request;

class PublicationCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationCommentRequest $request)
    {
        $publication    = Publication::find($request->route('id'));
        $description    = $request->description;
        $user           = auth()->user();

        $comment = PublicationComment::create([
            'description'       => $description,
            'publication_id'    => $publication->id,
            'user_id'           => $user->id,
        ]);

        if(isset($request->reply_user_id)) {
            $notification = PublicationNotification::create([
                'is_checked'        => false,
                'user_id'           => $request->reply_user_id,
                'publication_id'    => $publication->id,
                'comment_id'        => $comment->id,
            ]);
        }

        return redirect()->back()->with('status', 'Ваш комментарий опубликован!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

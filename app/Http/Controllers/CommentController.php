<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Artwork;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $comment = new Comment;

        $comment->artwork_id = $request->artwork_id;

        $comment->content = $request->content;

        $comment->user_id = auth()->user()->id;

        if($request->comment_id) {
            $comment_id = $request->comment_id;
        }

        $comment->save();

        $artwork = Artwork::where('id', $request->artwork_id)
        ->with([
            'seller.user.profile',
            'artworkImages',
            'elements.attribute',
            'comments',
            'likes'
        ])->first();

        $user = $artwork->seller->user;

        $sender = auth()->user();

        $details = [
                'greeting' => 'Hola '.$user->profile->firstName.' '.$user->profile->lastName.' han comentado una obra',
                'body' => $comment->content,
                //'thanks' => 'Thank you for visiting codechief.org!',
        ];

        $user->notify(new \App\Notifications\NewComment($details));

        return back()->with([
            'artwork' => $artwork
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::find($id);

        return $comment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);

        return $comment->delete();
    }
}

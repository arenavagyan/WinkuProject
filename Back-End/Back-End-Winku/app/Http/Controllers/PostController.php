<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'status' => 'required|integer|between:0,1',
            'created_at' => 'nullable|date',
            'photoUrl' => 'nullable|url',
            'videoUrl' => 'nullable|url',
            'viewCount' => 'nullable|integer',
            'commentCount' => 'nullable|integer',
            'likesCount' => 'nullable|integer',
            'dislikesCount' => 'nullable|integer',
            'comments'=>'nullable|array',

        ]);

        $post = new Post();
        $post->description = $request->description;
        $post->user_id = $request->user_id;
        $post->status = $request->status;
//        $post->created_at = $request->created_at->diffForHumans();
        $post->save();

        return response()->json($post,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create')->with('users', $users);
    }

    public function store()
    {
        // dd(request()->all());
        // Get the user data

        // Validate data

        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'post_creator' => ['required', 'exists:users,id'],
        ]);

        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;

        // $post = new Post;
        // $post->title  = $title;
        // $post->description = $description;
        // $post->user_id = $post_creator;
        // $post->save();

        Post::create(
            [
                'title' => $title,
                'description' => $description,
                'user_id' => $post_creator
            ]
        );

        // return redirect()->route('posts.index');
        return to_route('posts.index');
    }

    public function show($postId)
    {
        // select * from posts where id = postId
        // $post = Post::find($postId);

        // $post = Post::where('id', $postId)->first();

        // if (is_null($post)) {
        //     return to_route('posts.index');
        // }
        // return 'we are in show action ' . $postId;
        $post = Post::findOrFail($postId);
        return view('posts.show')->with('post', $post);
    }

    public function edit(Post $post)
    {
        // $post = Post::find($postId);
        $users = User::all();
        return view('posts.edit')->with('users', $users)->with('post', $post);
    }

    public function update($postId)
    {
        // Get the user data

        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'post_creator' => ['required', 'exists:users,id'],
        ]);
        // dd(request()->all());
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->update([
            'title' => $title,
            'description' => $description,
            'user_id' => $post_creator
        ]);

        return to_route('posts.show', $postId);
    }

    public function destroy($postId)
    {
        $post = Post::find($postId)->delete();
        // $post->delete();
        return to_route('posts.index');
    }
}
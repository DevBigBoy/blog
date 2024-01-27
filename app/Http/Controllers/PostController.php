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
        $users = User::all();

        $allPosts = [
            [
                'id' => 1,
                'title' => 'PHP',
                'posted_by' => 'SaraNour',
                'created_at' => '2024-10-10 09:00:00',
            ],
            [
                'id' => 2,
                'title' => 'PHP',
                'posted_by' => 'ali helmi',
                'created_at' => '2024-10-10 09:00:00',
            ],
            [
                'id' => 3,
                'title' => 'PHP',
                'posted_by' => 'zaied ahmed',
                'created_at' => '2024-10-10 09:00:00',
            ],
            [
                'id' => 4,
                'title' => 'PHP',
                'posted_by' => 'eslam afifiy',
                'created_at' => '2024-10-10 09:00:00',
            ],
            [
                'id' => 5,
                'title' => 'PHP',
                'posted_by' => 'khaled mohamed',
                'created_at' => '2024-10-10 09:00:00',
            ],
        ];

        return view('posts.index')->with('posts', $posts)->with('users', $users);
    }

    public function create()
    {
        $users = User::all();
        // Selec * From users
        return view('posts.create')->with('users', $users);
    }

    public function store()
    {
        // dd(request()->all());

        // Get the user data
        $data = request()->all();
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;

        $post = new Post;
        $post->title  = $title;
        $post->description = $description;
        $post->created_by = $post_creator;

        $post->save();

        // Post::create(
        //     [
        //         'title' => $title,
        //         'description' => $description
        //     ]
        // );

        // return redirect()->route('posts.index');
        return to_route('posts.index');
    }

    public function show($postId)
    {

        // select * from posts where id = postId
        // $post = Post::find($postId);
        $post = Post::findOrFail($postId);
        $users = User::all();
        // $post = Post::where('id', $postId)->first();
        $singlePost = [
            'id' => 5,
            'title' => 'PHP',
            'posted_by' => 'khaled mohamed',
            'created_at' => '2024-10-10 09:00:00',
        ];

        // if (is_null($post)) {
        //     return to_route('posts.index');
        // }
        // return 'we are in show action ' . $postId;
        return view('posts.show')->with('post', $post)->with('users', $users);
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

        // dd(request()->all());
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->update([
            'title' => $title,
            'description' => $description,
            'created_by' => $postCreator,
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
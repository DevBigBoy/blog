<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

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

        return view('posts.index')->with('posts', $posts);
    }

    public function create($data)
    {
        return view('posts.create');
    }

    public function store()
    {

        // Get the user data
        $data = request()->all();
        $title = request()->title;
        $title = request()->description;
        $title = request()->post_creator;
        // return redirect()->route('posts.index');
        return to_route('posts.index');
    }

    public function show($postId)
    {

        // select * from posts where id = postId
        // $post = Post::find($postId);
        $post = Post::where('id', $postId)->first();
        $singlePost = [
            'id' => 5,
            'title' => 'PHP',
            'posted_by' => 'khaled mohamed',
            'created_at' => '2024-10-10 09:00:00',
        ];
        // return 'we are in show action ' . $postId;
        return view('posts.show')->with('post', $post);
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function update()
    {
        // Get the user data
        // dd(request()->all());
        $data = request()->all();
        $title = request()->title;
        $title = request()->description;
        $title = request()->post_creator;
        return to_route('posts.show', parameters: 1);
    }

    public function destroy()
    {
        return to_route('posts.index');
    }
}
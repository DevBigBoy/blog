<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
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

        return view('posts.index')->with('posts', $allPosts);
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
        $singlePost = [
            'id' => 5,
            'title' => 'PHP',
            'posted_by' => 'khaled mohamed',
            'created_at' => '2024-10-10 09:00:00',
        ];
        // return 'we are in show action ' . $postId;
        return view('posts.show')->with('post', $singlePost);
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}

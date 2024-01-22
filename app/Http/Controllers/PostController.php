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

    public function create()
    {
    }

    public function store()
    {
    }

    public function show()
    {
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
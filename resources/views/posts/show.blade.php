@extends('layouts.app')

@section('title')
    View Post
@endsection

@section('content')
    {{-- @dd($post) --}}
    <div class="card mt-4">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{ $post['title'] }}</h5>
            <p class="card-text">Description: {{ $post['title'] }}</p>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Creator info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $post['posted_by'] }}</h5>
            <p class="card-text">Email: {{ $post['posted_by'] }}@gmail.com</p>
            <p class="card-text">Created At: {{ $post['created_at'] }}</p>
        </div>
    </div>
@endsection

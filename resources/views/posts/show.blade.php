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
            <h5 class="card-title">Title: {{ $post->title }}</h5>
            <p class="card-text">Description: {{ $post->description }}</p>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Creator info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name:
                @foreach ($users as $user)
                    @if ($user->id == $post->created_by)
                        {{ $user->name }}
                    @endif
                @endforeach
            </h5>
            <p class="card-text">Email: @foreach ($users as $user)
                    @if ($user->id == $post->created_by)
                        {{ $user->name }}
                    @endif
                @endforeach@gmail.com</p>
            <p class="card-text">Created At: {{ $post->created_at }}</p>
        </div>
    </div>
    <div class=" mt-3">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning " style="display: inline">Edit</a>

        <form style="display: inline" action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection

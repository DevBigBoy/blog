@extends('layouts.app')

@section('title')
    Edit Post
@endsection


@section('content')
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 ">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" value="{{ $post->title }}" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"> description</label>
            <textarea class="form-control" id="description" rows="3" name="description">{{ $post->description }}</textarea>
        </div>
        <div class="mb-3 ">
            <label for="posted_by" class="form-label">Post Creator</label>
            <select class="form-control" name="post_creator">

                @foreach ($users as $user)
                    @if ($post->created_by == $user->id)
                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                    @else
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

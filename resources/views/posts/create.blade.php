@extends('layouts.app')


@section('title')
    Create Post
@endsection

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3 ">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label"> description</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>
        <div class="mb-3 ">
            <label for="posted_by" class="form-label">Post Creator</label>
            <select class="form-control" name="post_creator">
                <option value="1">Eslam</option>
                <option value="1">zaied</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

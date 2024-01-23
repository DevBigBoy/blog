<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('posts.index') }}">Codezille Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('posts.index') }}">All Post</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>

      {{-- @dd($post) --}}
      <div class="container">
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
      </div>




    {{-- JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


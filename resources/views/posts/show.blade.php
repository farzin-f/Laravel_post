@extends('layouts/master')

@section('content')
  <div class="col-sm-8 blog-main">

    <div class="jumbotron">

      <div class="blog-post">

        <h3 class="blog-post-title">{{ ucfirst($post->title) }}</h3>
        {{-- Using Carbon library for timestamp created_at --}}
        <em class="blog-post-meta">
          {{ $post->user->name }}:
          {{ $post->created_at->toDayDateTimeString() }}
        </em>
        <p>
          {{ $post->body }}
        </p>

      </div>
    </div>

    <div class="comments">

      <div class="row marketing">
        <div class="col-lg-6">
          @if(count($post->getComments))
            <h3>Comments</h3>
            @foreach ($post->getComments as $comment)
              <em>{{ $comment->created_at->diffForHumans() }}, {{ $comment->user->name }}:</em><br />
              <p>{{ $comment->body }}</p>
              <hr />
            @endforeach
          @endif
        </div>
      </div>

    </div> {{-- comments --}}

    {{-- Add comments --}}
    <form method="post" action="/posts/{{ $post->id }}/comments">

      {{ csrf_field() }}

      <div class="card">
        <div class="card-header">
          Add Comments
        </div>
        <div class="card-block">
          <textarea name="body" class="form-control" placeholder="Your comment here"></textarea>
          <br />
          <button type="submit" class="btn btn-primary">Add</button>
        </div>

      </div>

      @include('layouts/errors')

    </form>

  </div>
@endsection

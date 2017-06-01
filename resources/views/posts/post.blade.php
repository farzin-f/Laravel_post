<div class="blog-post">
  <a class="blog-post-title" href="posts/{{ $post->id }}">{{ ucfirst($post->title) }}</a>
  {{-- Using Carbon library for timestamp created_at --}}
  <p class="blog-post-meta">
    {{ $post->user->name }}
    {{ $post->created_at->toDayDateTimeString() }}
  </p>

  <p>
    {{ $post->body }}
  </p>

</div><!-- /.blog-post -->

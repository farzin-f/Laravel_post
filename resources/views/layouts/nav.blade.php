<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      {{-- <li class="{{ Request::path() == '/' ? 'active' : '' }}">
      <a href="{{ Url('/') }}">Home</a>
    </li> --}}
    <a class="nav-link active" href="/">Home</a>
    <a class="nav-link" href="/tasks">Tasks</a>
    <a class="nav-link" href="/posts">Posts</a>
    <a class="nav-link" href="/posts/create">Publish Post</a>
    @if(Auth::check())
      <div class="nav-link ml-auto">
        {{ auth()->user()->name }}
      </div>
      <a class="nav-link" href="/logout">Log Out</a>
    @endif
  </nav>
</div>
</div>

<div id="app" class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white" href="#">{{config('app.name', 'LSAPP')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNavDropdown" class="navbar-collapse collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/posts">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/posts/create') }}">Create Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/register') }}">Register</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
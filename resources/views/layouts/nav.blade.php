<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Belajar Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item{{ request()->is('about') ? ' active' : '' }}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item{{ request()->is('contact') ? ' active' : '' }}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item{{ request()->is('login') ? ' active' : '' }}">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item{{ request()->is('posts') ? ' active' : '' }}">
            <a class="nav-link" href="/posts">Posts</a>
          </li>
    </div>
</nav>
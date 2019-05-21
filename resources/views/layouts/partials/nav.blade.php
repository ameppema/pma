<nav class="navbar navbar-expand-lg navbar-light mx-2 my-4">
  {{-- Logotype --}}
  <a class="navbar-brand" href="/">
    <img class="img-fluid" src="/images/pma_logo-menu.png">
  </a>

  {{-- NavBar --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav text-center">
      <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item {{Request::is('works') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/works">Works</a>
      </li>

      <li class="nav-item {{Request::is('tools') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/tools">Tools</a>
      </li>

      <li class="nav-item {{Request::is('lab') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/lab">Lab</a>
      </li>

      <li class="nav-item {{Request::is('posts') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/posts">Post</a>
      </li>

      <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

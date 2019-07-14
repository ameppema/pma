<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light my-5 py-3">
  <a class="navbar-brand" href="/">
    <img class="img-fluid" src="/images/assets/pma_logo-menu.png">
  </a>

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

      <li class="nav-item {{Request::is('labs') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/labs">Labs</a>
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

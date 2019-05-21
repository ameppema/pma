<footer>
  <div class="container text-center">
    <p class="copyright mb-1"><b>{{config('app.name')}}</b> todos los derechos reservados.</p>

    <ul class="footer-nav text-center my-4">
      <li class="footer-item {{Request::is('/') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="footer-item {{Request::is('works') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/works">Works</a>
      </li>

      <li class="footer-item {{Request::is('tools') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/tools">Tools</a>
      </li>

      <li class="footer-item {{Request::is('lab') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/lab">Lab</a>
      </li>

      <li class="footer-item {{Request::is('posts') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/posts">Post</a>
      </li>

      <li class="footer-item {{Request::is('contact') ? 'active' : ''}}">
        <a class="nav-link nav-hover" href="/contact">Contact</a>
      </li>
    </ul>
  </div>
</footer>

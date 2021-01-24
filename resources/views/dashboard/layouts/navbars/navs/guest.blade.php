<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('assets/images/web/brand/logo_text.png') }}" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
      <!-- Collapse header -->
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="{{ route('index') }}">
              <img src="{{ asset('assets/images/web/brand/logo_text.png') }}">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Navbar items -->
      <ul class="navbar-nav mr-auto">
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
              <span class="nav-link-inner--text">{{ __('Login') }}</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">
              <span class="nav-link-inner--text">{{ __('Register') }}</span>
            </a>
          </li>
        @endguest
      </ul>
      <hr class="d-lg-none" />
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.facebook.com/" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
            <i class="fab fa-facebook-square"></i>
            <span class="nav-link-inner--text d-lg-none">Facebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.youtube.com/" target="_blank" data-toggle="tooltip" data-original-title="See us on YouTube">
            <i class="fab fa-youtube"></i>
            <span class="nav-link-inner--text d-lg-none">YouTube</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://twitter.com/" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
            <i class="fab fa-twitter-square"></i>
            <span class="nav-link-inner--text d-lg-none">Twitter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://telegram.me/" target="_blank" data-toggle="tooltip" data-original-title="Join us on Telegram">
            <i class="fab fa-telegram"></i>
            <span class="nav-link-inner--text d-lg-none">Telegram</span>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block ml-lg-4">
          <a href="https://github.com/cooperative-tech-club/club-website" target="_blank" class="btn btn-neutral btn-icon">
            <span class="btn-inner--icon">
              <i class="fab fa-github mr-2"></i>
            </span>
            <span class="nav-link-inner--text">GitHub</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="top">
  <div class="container">
      <div class="row">
          <div class="col-md-6 left-side">
              <ul>
                  <li class="phone-text">111-222-3333</li>
                  <li class="email-text">contact@locomanicks.com</li>
              </ul>
          </div>
          <div class="col-md-6 right-side">
              <ul class="right">
                  <li class="menu">
                      <a href="{{ route('home_login') }}"
                          ><i class="fas fa-sign-in-alt"></i> Login</a
                      >
                  </li>
                  <li class="menu">
                      <a href="{{ route('home_create_account') }}"
                          ><i class="fas fa-user"></i> Sign Up</a
                      >
                  </li>
              </ul>
          </div>
      </div>
  </div>
</div>

<div class="navbar-area" id="stickymenu">
  <!-- Menu For Mobile Device -->
  <div class="mobile-nav">
      <a href="index.html" class="logo">
          <img src="uploads/logo.png" alt="" />
      </a>
  </div>

  <!-- Menu For Desktop Device -->
  <div class="main-nav">
      <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="index.html">
                  <img src="uploads/logo.png" alt="" />
              </a>
              <div
                  class="collapse navbar-collapse mean-menu"
                  id="navbarSupportedContent"
              >
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                          <a href="index.html" class="nav-link"
                              >Home</a
                          >
                      </li>
                      <li class="nav-item">
                          <a href="jobs.html" class="nav-link">
                              Find Jobs</a
                          >
                      </li>
                      <li class="nav-item">
                          <a href="companies.html" class="nav-link"
                              >Companies</a
                          >
                      </li>
                      {{-- <li class="nav-item">
                          <a href="pricing.html" class="nav-link"
                              >Pricing</a
                          >
                      </li> --}}
                      <li class="nav-item">
                          <a href="faq.html" class="nav-link">FAQ</a>
                      </li>
                      <li class="nav-item">
                          <a href="blog.html" class="nav-link"
                              >Blog</a
                          >
                      </li>
                      <li class="nav-item">
                          <a href="contact.html" class="nav-link"
                              >Contact</a
                          >
                      </li>
                  </ul>
              </div>
          </nav>
      </div>
  </div>
</div>
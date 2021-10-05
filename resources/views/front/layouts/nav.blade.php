<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
          <h1 class="logo me-auto me-lg-0"><a href="{{route('homePage')}}">Clever Minds</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto @if(Request::path() == '/') active @endif" href="{{ route('homePage') }}">Home</a></li>
              <li><a class="nav-link scrollto @if(Request::is('courses')) active @endif" href="{{ route('coursesPage') }}">Course Offered</a></li>
              <li><a class="nav-link scrollto  @if(Request::is('about')) active @endif" href="{{ route('aboutPage') }}">About Us</a></li>
              <li><a class="nav-link scrollto @if(Request::is('gallery')) active @endif" href="{{ route('gallery') }}">Gallery</a></li>
              <li><a class="nav-link scrollto @if(Request::is('contact')) active @endif" href="{{ route('contact') }}">Contact Us</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

          <a href="#" class="get-started-btn">Enroll Now</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#e90101"/>
<title>HOVA | Phim Online</title>
<meta name="author" content="Themezinho">
<meta name="description" content="For all kind of video streaming website">
<meta name="keywords" content="digiflex, video, movie, show, tv, watch, online, streaming, stream, ads, trailer, imdb, dram, action, hollywood, cinema, rate">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="digiflex | Online Movie Streaming">
<meta property="og:image" content="http://www.themezinho.net/digiflex/preview.png">
<meta property="og:site_name" content="digiflex">
<meta property="og:title" content="digiflex">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/digiflex">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@digiflex">
<meta name="twitter:creator" content="@digiflex">
<meta name="twitter:title" content="digiflex">
<meta name="twitter:description" content="HOVA | Phim Online">
<meta name="twitter:image" content="http://www.themezinho.net/digiflex/preview.png">

<!-- FAVICON FILES -->
<link href="{{asset('public/frontend/ico/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon" sizes="144x144">
<link href="{{asset('public/frontend/ico/apple-touch-icon-114-precomposed.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('public/frontend/ico/apple-touch-icon-72-precomposed.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('public/frontend/ico/apple-touch-icon-57-precomposed.png')}}" rel="apple-touch-icon">
<link href="{{asset('public/frontend/ico/favicon.png')}}" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="{{asset('public/frontend/css/lineicons.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/swiper.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}">
</head>
<body>

  @include('include.nav')

<section class="search-box">
  <div class="container">
    <h6>Type movie or tv show name to find it</h6>
    <form>
      <input type="search" placeholder="Search here">
      <input type="submit" value="FIND">
    </form>
    <ul>
      <li><a href="#">Pulp Function</a></li>
      <li><a href="#">Henry Porter</a></li>
      <li><a href="#">The Racer</a></li>
    </ul>
  </div>
  <!-- end container --> 
</section>
<header class="slider">
  <div class="main-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" data-background="images/slide01.jpg">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">NEW RELEASES</h6>
            <h2 class="name">The Rise of<br>
              <strong>Football</strong></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>5.4</b> IMDB SCORE </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">2020</div>
              </li>
              <li>
                <div class="hd">4K <b>ULTRA HD</b></div>
              </li>
              <li>
                <div class="tags">Romance, Action</div>
              </li>
            </ul>
            <p class="description">
                'The Football' follows Dee Dee Allen and Barry Glickman <br>who are New York City stage stars.
                </p>
            <a href="movie-single.html" class="play-btn">WATCH TRAILER</a> <a href="{{URL::to('/home')}}" class="add-btn">+</a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="images/slide02.jpg">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">NEW RELEASES</h6>
            <h2 class="name">The History of <br>
              <strong>Ottomans</strong></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>5.4</b> IMDB SCORE </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">2020</div>
              </li>
              <li>
                <div class="hd">1080 <b>HD</b></div>
              </li>
              <li>
                <div class="tags">Romance, Action</div>
              </li>
            </ul>
            <p class="description">From attending the prom with her girlfriend, Alyssa<br>
 When Dee Dee and Barry decide that Emma's </p>
            <a href="movie-single.html" class="play-btn">PLAY MOVIE</a> <a href="{{URL::to('/home')}}" class="add-btn">+</a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="images/slide03.jpg">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">NEW RELEASES</h6>
            <h2 class="name">La Guerra de<br>
              <strong>Mandou</strong></h2>
            <ul class="features">
              <li>
                <div class="rate">
                  <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                    <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                  </svg>
                  <b>5.4</b> IMDB SCORE </div>
                <!-- end rate --> 
              </li>
              <li>
                <div class="year">2020</div>
              </li>
              <li>
                <div class="hd">720P <b>HD</b></div>
              </li>
              <li>
                <div class="tags">Romance, Action</div>
              </li>
            </ul>
            <p class="description">She can truly celebrate who she is. Directed by Ryan Murphy<br>'The Mandou' is the spectacular, big-hearted film.
                </p>
            <a href="movie-single.html" class="play-btn">PLAY TRAILER</a> <a href="{{URL::to('/home')}}" class="add-btn">+</a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide --> 
    </div>
    <!-- end swiper-wrapper -->
    <div class="swiper-pagination"></div>
    <!-- end swiper-pagination --> 
  </div>
  <!-- end main-slider --> 
</header>
<!-- end slider -->
<main>
  

    @yield('content')


  <!-- end content-section -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h5 class="call-us">Questions? <strong>Call 0850-380-6444</strong></h5>
          <p> Format for custom post types that are not book
            or you can use else if to <u>specify a second</u> post type the
            same way as above. </p>
          <div class="language"> <i class="lni lni-world"></i>
            <select>
              <option>English</option>
              <option>Spanish</option>
            </select>
          </div>
          <!-- end language --> 
        </div>
        <!-- end col-4 -->
        <div class="col-lg-2 offset-lg-1 col-md-4">
          <h6 class="widget-title">DIGIFLEX</h6>
          <ul class="footer-menu">
            <li><a href="digiflex.html">Digiflex</a></li>
            <li><a href="devices.html">Devices</a></li>
            <li><a href="tips.html">Tips</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-2 col-md-4">
          <h6 class="widget-title">SUPPORT</h6>
          <ul class="footer-menu">
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="help-center.html">Help Center</a></li>
            <li><a href="{{URL::to('/home')}}">Account</a></li>
            <li><a href="support.html">Support <i class="lni lni-question-circle"></i></a></li>
            <li><a href="media-center.html">Media Center</a></li>
          </ul>
        </div>
        <!-- end col-4 -->
        <div class="col-lg-2 col-md-4">
          <h6 class="widget-title">POLICIES</h6>
          <ul class="footer-menu">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms-agreement.html">Terms & Agreement</a></li>
            <li><a href="legal-notices.html">Legal Notices</a></li>
          </ul>
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container -->
    <div class="bottom-bar">
      <div class="container"> <span>© 2020 Digiflex | Online Movie Streaming</span> <span>Site create by <a href="#">Themezinho</a></span> </div>
      <!-- end container --> 
    </div>
    <!-- end bottom-bar --> 
  </footer>
  <!-- end footer --> 
</main>

<!-- JS FILES --> 
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/swiper.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/fancybox.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/scripts.js')}}"></script>
</body>
</html>
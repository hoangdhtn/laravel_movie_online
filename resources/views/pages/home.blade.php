@extends('../layout')
@section('content')

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
      @foreach($new_releases as $key => $new_release)
      <div class="swiper-slide">
        <div class="slide-inner" data-background="{{asset('public/uploads/' . $new_release->hinh_phim)}}">
          <div class="container" data-swiper-parallax="200">
            <h6 class="tagline">NEW RELEASES</h6>
            <h2 class="name">{{$new_release->ten_phim}}<br>
              <strong>
                @foreach($theloais as $key => $theloai)
                @if($theloai->id_theloai == $new_release->id_theloai)

                {{$theloai->ten_theloai}}
                @endif


                @endforeach
              </strong></h2>
              <ul class="features">
                <li>
                  <div class="rate">
                    <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                      <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                    </svg>
                    <b>{{$new_release->rating}}</b> IMDB SCORE </div>
                    <!-- end rate --> 
                  </li>
                  <li>
                    <div class="year">2020</div>
                  </li>
                  <li>
                    <div class="hd">4K <b>ULTRA HD</b></div>
                  </li>
                </ul>
                <p class="description">
                  {{$new_release->dien_vien}}
                </p>
                <a href="movie-single.html" class="play-btn">WATCH TRAILER</a> <a href="{{URL::to('/home')}}" class="add-btn">+</a> </div>
                <!-- end container --> 
              </div>
              <!-- end slide-inner --> 
            </div>
            <!-- end swiper-slide -->
            @endforeach
          </div>
          <!-- end swiper-wrapper -->
          <div class="swiper-pagination"></div>
          <!-- end swiper-pagination --> 
        </div>
        <!-- end main-slider --> 
      </header>
      <!-- end slider -->
      <main>


        <section class="content-section" data-background="#111111">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-title text-center light">
                  <h6>Những gì bạn đang tìm</h6>
                  <h2>Những bộ phim dành cho bạn</h2>
                </div>
                <!-- end section-title --> 
              </div>
              <!-- end col-12 -->
              @foreach($phim12s as $key => $phim12)
              <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="video-thumb light">
                  <figure class="video-image" style="width: 180px; height: 245px;"> <a href="#"><img src="{{asset('public/uploads/' . $phim12->hinh_phim)}}" alt="Image"></a>
                    <div class="circle-rate">
                      <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                        <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                      </svg>
                      <b>5.7</b> </div>
                      <!-- end circle-rate -->
                      <div class="hd">1080 <b>HD</b></div>
                      <!-- end hd --> 
                    </figure>
                    <div class="video-content"> <small class="range">190 min,</small>
                      <ul class="tags">
                        <li>Romance</li>
                      </ul>
                      <div class="age">PG13</div>
                      <!-- end age -->
                      <h3 class="name"><a href="movie-single.html">Black Panther</a></h3>
                    </div>
                    <!-- end video-content --> 
                  </div>
                  <!-- end video-thumb --> 
                </div>
                @endforeach
                <!-- end col-2 -->


                <div class="col-12 text-center" > <a href="#"  class="custom-button">Tất cả phim</a> </div>
                <!-- end col-12 --> 
              </div>
              <!-- end row --> 
            </div>
            <!-- end container --> 
          </section>
          <!-- end content-section -->
          <section class="content-section" data-background="public/frontend/images/section-pattern01.png">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-7">
                  <div class="testimonial">
                    <h2>Chào mừng bạn đến HOVA Online </h2>
                    <blockquote>“Phim chất lượng - Trải nghiệm tốt - Mọi thứ đều dành cho bạn ”</blockquote>
                    <figure> <img src="{{asset('public/uploads/avatar01.jpg')}}" alt="Image"> <img src="public/frontend/images/brand01.jpg" alt="Image"> </figure>
                    <h6>Phạm Huy Hoàng <br>
                      <small>Deverloper</small> </h6>
                    </div>
                    <!-- end testimonial --> 
                  </div>
                  <!-- end col-7 -->
                  <div class="col-lg-5">
                    <figure class="side-image"> <img src="public/frontend/images/side-image02.png" alt="Image"> </figure>
                    <!-- end side-image --> 
                  </div>
                  <!-- end col-5 --> 
                </div>
                <!-- end row --> 
              </div>
              <!-- end container --> 
            </section>
            <!-- end content-section -->
            <section class="content-section">
              <div class="video-bg">
                <video src="videos/video01.mp4" autoplay muted playsinline loop></video>
              </div>
              <!-- end video-bg -->
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="section-title text-center light">
                      <h6>START SECURE BROWSING</h6>
                      <h2>Ready to Grab the deal?</h2>
                    </div>
                    <!-- end section-title --> 
                  </div>
                  <!-- end col-12 --> 
                </div>
                <!-- end row -->
                <div class="row">
                  <div class="col-lg-4">
                    <div class="price-box">
                      <figure class="icon"><img src="public/frontend/images/icon04.png" alt="Image"></figure>
                      <div class="months">1-month plan</div>
                      <div class="price"><span>$</span> <b>9.99</b> <small>per month</small> </div>
                      <a href="#">GET THE DEAL</a>
                      <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
                    </div>
                    <!-- end price-box --> 
                  </div>
                  <!-- end col-4 -->
                  <div class="col-lg-4">
                    <div class="price-box">
                      <figure class="icon"><img src="public/frontend/images/icon05.png" alt="Image"></figure>
                      <div class="months">12-months plan</div>
                      <div class="price"><span>$</span> <b>3.99</b> <small>per month</small> </div>
                      <div class="save">Save 68%</div>
                      <div class="note"><u>$286.80</u>  $89.00 for the first 2 years</div>
                      <a href="#">GET THE DEAL</a>
                      <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
                    </div>
                    <!-- end price-box --> 
                  </div>
                  <!-- end col-4 -->
                  <div class="col-lg-4">
                    <div class="price-box">
                      <figure class="icon"><img src="public/frontend/images/icon06.png" alt="Image"></figure>
                      <div class="months">6-months plan</div>
                      <div class="price"><span>$</span> <b>6.99</b> <small>per month</small> </div>
                      <a href="#">GET THE DEAL</a>
                      <div class="guarantee"><i class="lni lni-protection"></i> 30-days money-back guarantee</div>
                    </div>
                    <!-- end price-box --> 
                  </div>
                  <!-- end col-4 --> 
                </div>
                <!-- end row --> 
              </div>
              <!-- end container --> 
            </section>
            <!-- end content-section -->
            <section class="content-section no-spacing" data-background="#111111">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="get-started-box">
                      <h2>Start for your first 30 days.</h2>
                      <p>Ready to watch? Enter your email to create or restart your membership.</p>
                      <form>
                        <input type="email" placeholder="Type your e-mail address">
                        <input type="submit" value="GET STARTED">
                      </form>
                    </div>
                    <!-- end get-started-box --> 
                  </div>
                  <!-- end col-4 --> 
                </div>
                <!-- end row --> 
              </div>
              <!-- end container --> 
            </section>


            @endsection
 @extends('layouts.account')

 @section('content')

 <!-- end navbar -->
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
<main>
  <header class="page-header single" data-background="{{asset('public/frontend/images/movie-poster-bg.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-12">
         <div class="video-player">
          <button style="border: none; font-family: 'Roboto', sans-serif;" onclick="javascript:history.back()" type="button" class="back-btn">Quay lại</button>
          <iframe width="984px" height="553px" src="{{$phim->link_phim}}" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>

        </div>
        <!-- end video-player -->
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end col-12 -->
    <!-- end row --> 
  </div>
  <!-- end container --> 
</header>
<!-- end header -->
<section class="content-section" data-background="#ffffff">
	<div class="container">
    <div class="row">
      <div class="col-lg-8">
       <div class="movie-info-box">
        <h2 class="name">{{$phim->ten_phim}}<br>
          @foreach($theloais as $key => $theloai)
          @if($theloai->id_theloai == $phim->id_theloai)
          <strong>{{$theloai->ten_theloai}}</strong>
          @endif
          @endforeach
        </h2>
        <ul class="features">
          <li>
            <div class="rate">
              <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40" fill="transparent"  xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-chart__background" stroke="#eee" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
              </svg>
              <b>{{$phim->rating}}</b> IMDB SCORE </div>
              <!-- end rate --> 
            </li>
            <li>
              <div class="year">2020</div>
            </li>
            <li>
              <div class="hd">1080 <b>HD</b></div>
            </li>
            <li>
              <div class="tags">{{$phim->daodien}}</div>
            </li>
          </ul>
          <p class="description">Diễn viên: {{$phim->dien_vien}}</p>
          <a href="#" class="add-btn">+ ADD YOUR LIST</a> 

          <div class="rate-box">
            <a href="#"><i class="lni lni-thumbs-up"></i></a> <a href="#"><i class="lni lni-thumbs-down"></i></a> <strong>61% liked this film</strong></div>
          </div>
          <!-- end movie-info-box -->
        </div>
        <!-- end col-8 -->
        <div class="col-lg-4">
         <div class="movie-side-info-box">
          <figure><img style="width: 328px; height: 393px;" src="{{asset('public/uploads/' . $phim->hinh_phim)}}" alt="Image"></figure>
          <ul>
            <li style="font-family: 'Roboto', sans-serif;"><strong>Rating: </strong> {{$phim->rating}}</li>
            <li style="font-family: 'Roboto', sans-serif;"><strong>Năm sản xuất:</strong> {{$phim->nam_sx}}</li>
            <li style="font-family: 'Roboto', sans-serif;"><strong>Đạo diễn:</strong> {{$phim->daodien}}</li>
            <li style="font-family: 'Roboto', sans-serif;"><strong>Thời lượng:</strong> {{$phim->thoi_luong}}</li>
          </ul>
        </div>
        <!-- end movie-side-info-box -->
      </div>
      <!-- end col-4 -->
    </div>
    <!-- end col-12 -->
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<section class="content-section" data-background="#111111">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title light">
          <h6>Bạn có thể cần</h6>
          <h2>Các bộ phim cùng thể loại</h2>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      @foreach($phim6s as $key => $phim6)
      <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
        <div class="video-thumb light">
          <figure class="video-image"> <a href="#"><img src="{{asset('public/uploads/' . $phim6->hinh_phim)}}" alt="Image"></a>
            <div class="circle-rate">
              <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2" fill="none" cx="15" cy="15" r="14"></circle>
                <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2" stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
              </svg>
              <b>{{$phim6->rating}}</b> </div>
              <!-- end circle-rate -->
              <div class="hd">1080 <b>HD</b></div>
              <!-- end hd --> 
            </figure>
            <div class="video-content"> <small class="range">{{$phim6->thoi_luong}}</small>
              <ul class="tags">
                @foreach($theloais as $key => $theloai)
                @if($theloai->id_theloai == $phim6->id_theloai)
                <li>{{$theloai->ten_theloai}}</li>
                @endif
                @endforeach
                
              </ul>
              {{-- <div class="age">PG13</div> --}}
              <!-- end age -->
              <h3 class="name"><a href="{{ route('xem-phim.show', $phim6->id_phim) }}">{{$phim6->ten_phim}}</a></h3>
            </div>
            <!-- end video-content --> 
          </div>
          <!-- end video-thumb --> 
        </div>
        @endforeach
        <!-- end col-2 -->
        <div class="col-12 text-center"> <a href="{{ route('danh-muc-phim.show', $phim->id_theloai) }}" class="custom-button">TẤT CẢ</a> </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
  <section class="content-section" data-background="#ffffff">
   <div class="container">
     <div class="row">
      <div class="col-12">
        <div class="section-title">
         <h6>CHIA SẼ VỚI MỌI NGƯỜI</h6>
         <h2>Tất cả bình luận</h2>
       </div>
       <!-- end section-title -->
     </div>
     <!-- end col-12 --> 
     <div class="col-12">
       <div class="comments">
        <ul class="comments-list">
         <li>
           <div class="comment">
            <h6>Jenny Klausein</h6>
            <p>Users like you see an increase in open rates when including recipients’ first and last name in the “To” field to personalize their emails. Gravity letters it amongst herself dearest an windows by. Wooded ladies she basket season age her uneasy saw.</p>
            <small>November 25, 2020</small>
            <a href="#">Người dùng</a>
          </div>
          <!-- end comment -->
        </li>
</ul>
<div class="comments-form">
 <h5>Leave a Reply</h5>
 <div class="form-group">
   <textarea placeholder="Comment"></textarea>
 </div>
 <!-- end form-group -->
 <div class="form-group">
   <input type="submit" value="Post Comment">
 </div>
 <!-- end form-group -->
</div>
<!-- end comments-form -->
</div>
<!-- end comments -->
</div>
<!-- end col-12 -->
</div>
<!-- end row --> 
</div>
<!-- end container --> 
</section>
<!-- end content-section -->	
@endsection
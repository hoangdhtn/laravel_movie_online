 @extends('layouts.account')

@section('content')
<header class="page-header">
	<div class="container">
		<h1>Liên hệ với chúng tôi</h1>
	</div>
</header>
<!-- end page-header -->
<main>

  <section class="content-section">
    <div class="container">
      <div class="row justify-content-center">
			 <div class="col-12">
          <div class="section-title text-center">
			  <h6>KẾT NỐI VỚI CHÚNG TÔI</h6>
            <h2>Liên lạc</h2>
          </div>
          <!-- end section-title --> 
        </div>
        <!-- end col-12 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
				<img src="{{asset('public/frontend/images/location.png')}}" alt="Image">
				</figure>
				<h5>ĐỊA CHỈ</h5>
				<p>hova.com<br>
					VietNam - VN</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
				<img src="{{asset('public/frontend/images/phone.png')}}" alt="Image">
				</figure>
				<h5>ĐIỆN THOẠI</h5>
				<p>+ 1 800 746 8 384<br>
					# 1001</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		  <div class="col-lg-4">
		  	<div class="contact-box">
			  <figure>
				<img src="{{asset('public/frontend/images/mail.png')}}" alt="Image">
				</figure>
				<h5>EMAIL</h5>
				<p><a href="#">info@hova.com</a><br>
					VN</p>
				
			  </div>
			  <!-- end contact-box -->
		  </div>
		  <!-- end col-4 -->
		</div>   
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end content-section -->
@endsection
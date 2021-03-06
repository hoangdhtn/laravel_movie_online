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

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>

<style>
a,h1,h2,h6,blockquote,p,h5,input,textarea{
  font-family: 'Roboto', sans-serif;
}
.active{
  background-color: #929191;
}
</style>
</head>
<body>
	@include('include.nav')


  @yield('content')

  @include('include.footer')
</main>

<!-- JS FILES --> 
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/swiper.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/fancybox.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/scripts.js')}}"></script>
</body>
</html>
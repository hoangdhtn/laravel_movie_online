<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#e90101"/>
<title>HOVA | Phim Online</title>
<meta name="author" content="Themezinho">
<meta name="description" content="For all kind of video streaming website">
<meta name="keywords" content="HOVA, video, movie, show, tv, watch, online, streaming, stream, ads, trailer, imdb, dram, action, hollywood, cinema, rate">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="HOVA | Phim Online">

<meta property="og:site_name" content="HOVA | Phim Online">
<meta property="og:title" content="HOVA | Phim Online">
<meta property="og:type" content="website">
<meta property="og:url" content="https://it-lms.com/hovaphim/">
<meta property="og:image" content="{{asset('public/frontend/images/logo-dd.jpg')}}">
<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@HOVA">
<meta name="twitter:creator" content="@HOVA">
<meta name="twitter:title" content="HOVA | Phim Online">
<meta name="twitter:description" content="HOVA | Phim Online">
<meta name="twitter:image" content="{{asset('public/frontend/images/logo-dd.jpg')}}">

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
a, h2,h6 , h5,p,blockquote, li,input{
  font-family: 'Roboto', sans-serif;
}
</style>
</head>
<body>

  @include('include.nav')



    @yield('content')


  <!-- end content-section -->
   @include('include.footer')
</main>

<!-- JS FILES -->
<script>
function goBack() {
  window.history.back()
}
</script> 
<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/swiper.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/fancybox.min.js')}}"></script> 
<script src="{{asset('public/frontend/js/scripts.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from inspirothemes.com/polo/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2020 08:13:53 GMT -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>PostComent | Frontend</title>

<link href="{{ url('assets/frontend/style.css')}}" rel="stylesheet">
<link href="{{ url('assets/frontend/plugins.css')}}" rel="stylesheet">
</head>

<body>
<div class="body-inner">
<header id="header" data-fullwidth="true">
<div class="header-inner">
<div class="container">

<div id="logo">
<a href="#">
<span class="logo-default">PostComentsApp</span>
<span class="logo-dark">PostComentsApp</span>
</a>
</div>


<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
<form class="search-form" action="https://inspirothemes.com/polo/search-results-page.html" method="get">
<input class="form-control" name="q" type="text" placeholder="Type & Search..." />
<span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
</form>
</div>


<div id="mainMenu-trigger">
<a class="lines-button x"><span class="lines"></span></a>
</div>


<div id="mainMenu">
<div class="container">
<nav>
<ul>
<li><a href="#">Login</a></li>
<li><a href="#">Register</a>
</nav>
</div>
</div>

</div>
</div>
</header> 

<section id="page-content" class="sidebar-left">
<div class="container">

<div class="page-title">
<h1>Blog - Posts</h1>
<div class="breadcrumb float-left">
<ul>
<li><a href="#">Home</a>
</li>
<li><a href="#">Blog</a>
</ul>
</div>
</div>


<div id="blog">


@foreach ($posts as $post)
<div class="post-item">
<div class="post-item-wrap">
<div class="post-item-description">
<span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$post->date}}</span>
<span class="post-meta-comments"><a href="#"><i class="fa fa-comments-o"></i>{{ $post->author }}</a></span>
<h2><a href="#">{{ $post->title }}</a></h2>
<p>{{ $post->text }}</p>
<a href="{{ url('frontend/' . $post->id) }}" class="item-link">Read More</a>
</div>
</div>
</div>
@endforeach

</div>


<!--<ul class="pagination">-->
<!--<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>-->
<!--<li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--<li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--<li class="page-item active"><a class="page-link" href="#">3</a></li>-->
<!--<li class="page-item"><a class="page-link" href="#">4</a></li>-->
<!--<li class="page-item"><a class="page-link" href="#">5</a></li>-->
<!--<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>-->
<!--</ul>-->

</div>
</section> 

<footer id="footer">
<div class="footer-content">
<div class="container">
<div class="row">

</div>
<div class="copyright-content">
<div class="container">
<div class="copyright-text text-center">&copy; 2020 Felipe - PostComentsApp. All Rights Reserved.<a href="http://www.inspiro-media.com/" target="_blank" rel="noopener"> INSPIRO</a> </div>
</div>
</div>
</footer>

</div>

<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="{{ url('assets/frontend/js/jquery.js') }}"></script>
<script src="{{ url('assets/frontend/js/plugins.js') }}"></script>

<script src="{{ url('assets/frontend/js/functions.js') }}"></script>
</body>

<!-- Mirrored from inspirothemes.com/polo/blog-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2020 08:13:53 GMT -->
</html>
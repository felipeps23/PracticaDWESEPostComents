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

<section id="page-content" class="sidebar-right">
<div class="container">
<div class="row">

<div class="content col-lg-9">

<div id="blog" class="single-post">

<div class="post-item">
<div class="post-item-wrap">
<div class="post-image">
</div>
<div class="post-item-description">
<h2>{{ $post->title }}</h2>
<div class="post-meta">
<span class="post-meta-date">{{ $post->date }}</span>
<span class="post-meta-category"><a href="#">{{ $post->author }}</a></span>
</div>
<p>{{ $post->text }}</p>
</div>

<div class="comments" id="comments">
<div class="comment_number">
Comments
</div>
<div class="comment-list">

@foreach ($coments as $coment)
<div class="comment" id="comment-1">
<div class="text">
<h5 class="name">{{ $coment->email }}</h5>
<span class="comment_date">{{ $coment->date }}</span>
<div class="text_holder">
<p>{{ $coment->text }}</p>
</div>
</div>
</div>
@endforeach

<form role="form" action="{{ url('frontend') }}" method="post" id="createpostForm">
    @csrf


        <div class="card-body">

            <div class="form-group" style="display:none">
                 <label for="idpost">idpost</label>
                 <input type="idpost" maxlength="45" minlength="1" required class="form-control" id="idpost" placeholder="idpost" name="idpost" value="{{ $post ->id }}">
          </div>
          <div class="form-group">
                <label for="email">Email</label>
                    <input type="text" maxlength="80" minlength="2" required class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                 <label for="text">Text</label>
                 <input type="text" maxlength="45" minlength="1" required class="form-control" id="text" placeholder="Texto" name="text" value="{{ old('text') }}">
            </div>
            <div class="form-group">
                 <label for="date">date</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
            </div>

             <button type="submit" class="btn btn-primary">Enviar comentario</button>
        </div>
        <br>

</form>

</section>

<footer id="footer">
<div class="footer-content">
<div class="container">
<div class="row">

</div>
<div class="copyright-content">
<div class="container">
<div class="copyright-text text-center">&copy; 2020 Felipe - PostComentsApp. All Rights Reserved.</div>
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
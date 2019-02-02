@extends('layouts.app');

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portofolio.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
  <br>
  <br>
    <div class="container">
  <div class="jumbotron p-3 p-md-5 text-white rounded besar">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Muhammad Muhyi Rasyidin</h1>
      <p class="lead my-3">Web developer and Mobile</p>
    </div>
  </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h5 class="pb-3 mb-4 font-italic border-bottom">
        About me
      </h5>

      <div class="blog-post">
        <h2 class="blog-post-title">About</h2>
        <p class="blog-post-meta">January 29th, 2019</p>

        <p>Ijinkan saya untuk memperkenalkan diri, nama saya Muhammad Muhyi Rasyidin atau yang sering dipanggil
        dengan Muhyi oleh teman saya, saya hanya seorang pelajar sekolah menengah kejuruan(SMK) pada salah satu sekolah kejuruan ternama yang berhasil masuk kejurusan yang saya sukai
        .</p>
        <hr>

        <h2>Education</h2>
        <ul>
            <li>SMK Taruna Bhakti</li>
            <li>SMP Islam Raden Patah</li>
        </ul>
        <hr>
        
        <h3>Life Goal</h3>
        <p>Bercita-cita untuk menjadi programmer yang handal dalam bidangnya, lulus dan masuk kedalam universitas unggulan/favorit, membanggakan orang tua
            dengan karya yang sudah diciptakan nantinya, ingin membuat aplikasi yang memudahkan orang lain dalam melakukan kegiatannya sehari-hari
        </p>
        
        <h3>Contact me</h3>
        <p><b>E-mail -- </b>muhyirasyidin0@gmail.com</p>
        <p><b>Whatsapp -- </b>085885376880</p>
        <p><b>Phone -- </b>085885376880</p>  
    </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>

<!-- Skill -->
      <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic"><center>Skills</center></h4>
      </div>
<div class="container">
<div class="row">
  <div class="card col-md-5" style="width: 18rem;">
    <img src="images/java.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Java</h5>
        <p class="card-text">Java is a general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible.</p>
      <hr>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
      </div>
    </div>
  </div>
  <div class="col-md-2">
  
  </div>
  <div class="card col-md-5" style="width: 18rem;">
    <img src="images/JSLogo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">JavaScript</h5>
        <p class="card-text">JavaScript, often abbreviated as JS, is a high-level, interpreted programming language that conforms to the ECMAScript specification. It is a language that is also characterized as dynamic, weakly typed, prototype-based and multi-paradigm.</p>
        <hr>
      <div class="progress">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
      </div>
    </div>
  </div>
  </div>
</div>
    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
    
    <div class="container pt-5">
  <div class="row">
      <div class="col-md-3">
      
      </div>
      <div class="card" style="width: 18rem;">
        <img src="images/php.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">PHP</h5>
            <p class="card-text">PHP: Hypertext Preprocessor is a server-side scripting language designed for Web development. It was originally created by Rasmus Lerdorf in 1994; the PHP reference implementation is now produced by The PHP Group.</p>
          <hr>
          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">35%</div>
          </div>

          <div class="col-md-4"> 
          
          </div>
      </div>
      </div>
  </div>
</div>

      <div class="p-3 pt-5">
        <h4 class="font-italic">My sosmed</h4>
        <ol class="list-unstyled">
          <li><a href="https://github.com/muhyirasyidin">GitHub</a></li>
          <li><a href="https://twitter.com/muhyirasyidin1">Twitter</a></li>
          <li><a href="https://www.facebook.com/muhyi.rasyidin.5">Facebook</a></li>
          <li><a href="https://www.instagram.com/muhyirasyidin/">Instagram</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->
</div>
  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer bawah">
    <div class="container">
      <center><p>&copy; Company 2018-2019</p></center>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>
@endsection
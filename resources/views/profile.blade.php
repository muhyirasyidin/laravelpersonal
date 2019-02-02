@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Jumbotron Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lainnya.css') }}" rel="stylesheet">

  </head>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Wellcome to My Profile</h1>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-1">
      
      </div>
      <div class="col-md-7 mt-5 pt-5">
        <img src="images/saya.jpg" alt="" class="responsive"> 
      </div>
      <div class="col-md-4">
        <h2>Data diri</h2><br>
        <p><b>Name : </b>Muhammad Muhyi Rasyidin</p>
        <p><b>Date of Birth : </b>Depok, March 18th 2002</p>
        <p><b>Gender: </b>Male</p>
        <p><b>School : </b>SMK Taruna Bhakti</p>
        <p><b>Majoring :</b>RPL</p>
        <p><b>Citizenship :</b>Indonesia</p>
        <p><b>Religion : </b>Moslem</p>
        <p><b>Marittal Status : </b>Single</p>
        <p><b>Address : </b>Jl raya Jakarta Bogor km 38 GG almuhsinin Rt01/01 NO 23A Kecamatan Sukamaju Cilodong</p>
        <p><b>Phone Number : </b>085885376880</p>
        <p><b>E-mail</b>muhyirasyidin0@gmail.com</p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <center><p>&copy; Company 2018-2019</p></center>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script></body>
</html>
@endsection
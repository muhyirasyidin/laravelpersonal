@extends('layouts.app');

@section('content')
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Article</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/article.css') }}" rel="stylesheet">

  </head>
  <body>
    <!-- Page Content -->
    <div class="container">
        <!-- Post Content Column -->
        <div class="row">
        <div class="col-md-2">
        
        </div>
        <div class="col-md-8">

          <!-- Title -->
          <h1 class="mt-4">Cara Enjoy Memulai Belajar Pemrograman</h1>

          <hr>

          <!-- Date/Time -->
          <p>Posted on January 31, 2019 at 12:00 PM</p>

          <hr>

          <!-- Preview Image -->
          <center>
          <img class="img-fluid rounded" src="images/cover.jpg" alt="">
          </center>
          
          <hr>

          <!-- Post Content -->
          <p class="lead">Pada prinsipnya sama seperti kita ingin menuju Roma, akan ada banyak jalan. Kita bisa lewat Bogor, kemudian ke Bandung lalu sampai di Roma. Atau kita juga bisa lewat Karawang, kemudian ke Jakarta, selanjutnya mendaki gunung Krakatau dan sampailah di Roma (anggap saja itu benar :D). Ya, untuk menjadi seorang programmer pun demikian, ada banyak cara yang bisa ditempuh untuk belajarnya.</p>
            <br>
          <p class="lead">Beberapa di antara kita tentu berbeda-beda caranya dalam belajar pemrograman, dan ini dipengaruhi oleh banyak faktor, seperti latar belakang, kecepatan belajar, keadaan ekonomi dan juga mungkin lingkungan. Selain itu, cara saya jatuh cinta dengan pemrograman bisa jadi berbeda dengan cara Kamu. Dan mungkin itu pun mempengaruhi.</p>
            <br>
          <p class="lead">Sesuatu yang harus kita pahami adalah, bahwa tidak mungkin hari ini ingin jadi seorang master programmer, kemudian kita hanya nonton tv, kemudian tidur dan pagi harinya kita tiba-tiba bisa membuat program super keren yang bisa mengalahkan sofware buatan Microsoft. Tidak ada ceritanya kita sedang berjalan-jalan di musium Taman Mini, tiba-tiba ada seekor laba-laba yang menggigit kita, kemudian kita ketiduran di jalanan, dibangunkan satpam dan setelah bangun kita langsung bisa coding sambil bergelantungan di pohon. Satu hal yang harus kita sepakati adalah, ada sebuah proses yang harus kita lalui untuk itu.</p>
            <br>
          <p class="lead">Pernah ada yang bertanya pada saya, “Kak, saya sudah lama ingin belajar pemrograman, gimana ya caranya?”. Kemudian saya tanyakan, “Apa yang sudah kamu lakukan supaya Kamu bisa belajar pemrograman?”, kemudian dia menggeleng dan menjawab “belum ngapa-ngapain sih”. Kemudian saya tanya, “Kamu sudah coba beli buku tentang pemrograman?”, dia jawab “belum”. “Kamu sudah baca artikel di internet tentang pemrograman?”, dia pun menjawab belum. Saya kaget, kok bisa menginginkan sesuatu, tapi tidak melakukan sesuatu untuk mencapainya? Semua butuh proses kawan...</p>  
            <br>
          <p class="lead">Sesuatu yang saya ingin sampaikan di atas adalah, buat Kamu yang ingin bisa pemrograman, Kamu harus siap untuk menjalani prosesnya, tidak ada yang instan untuk pandai pemrograman. Tidak gampang memang, tapi saya jamin akan menarik. Kalau kamu sependapat dengan saya, sebenarnya programming itu bukan hanya sebatas ilmu untuk membuat program komputer, tetapi juga merupakan gaya hidup, dan kamu bisa menikmatinya.</p>  
            <br>
          <p class="lead">Artikel ini saya tulis bukan untuk yang sudah mahir pemrograman, tidak... tidak mungkin saya mengajarkan ikan cara untuk berenang :D. Artikel ini khusus untuk Kamu yang baru melihat keindahan dari pemrograman, dan kamu tergoda untuk mendalaminya, karena kamu melihat ada secercah kebahagiaan yang bisa didapatkan di dalamnya, namun Kamu bingung bagaimana cara memulainya.</p>  
            <br>
          <p class="lead">Apa yang akan saya sampaikan selanjutnya, tidak bersifat absolute, artinya tidak mesti demikian. Karena seperti yang saya singgung di awal, ada banyak jalan untuk menuju Roma. Dan cara setiap orang berbeda-beda. Namun semoga ini bisa membantu Kamu untuk memulai. Buat teman-teman yang sudah lama mendalami programming, dan punya sebuah “cara”, nanti bisa dishare juga ya di kotak komentar, itu pasti akan bermanfaat.</p>
            <br>
          <p class="lead">Berikut ini adalah beberapa hal yang bisa Kamu lakukan untuk memulai belajar pemrograman:</p>
            <br>
          <h2>1. Mengerti dulu apa itu "programming"</h2>
            <br>
          <p class="lead">Sebelum Kamu melakukan sesuatu, Kamu harus tau dulu dong apa yang ingin Kamu lakukan. Kamu harus tau dulu apa itu programming. Sama seperti Kamu suka seorang wanita, sebelum Kamu mulai melakukan pendekatan, apalagi menembaknya, minimalnya Kamu harus punya informasi tentang dia. Misalnya Kamu harus tau berapa jumlah lubang hidungnya, apakah dia makan menggunakan tangan atau tidak, bagaimana cara berjalannya, apakah kakinya ada 2, apakah ibunya perempuan :D. Semakin banyak informasi yang Kamu tau, maka akan semakin baik. Dan mungkin akan membuat Kamu semakin jatuh cinta.</p>      
            <br>
          <p class="lead">Sebagian dari kita tidak mencoba mendalami pemrograman, karena mungkin hanya tau sebagian saja. Misalnya hanya tau, “pemrograman itu lo akan nulis kode di texteditor dan lo bisa bikin program”. Kalau hanya itu yang diketahui, wajar saja jika dia tidak tertarik untuk belajar pemrograman.</p>  
            <br>
          <p class="lead">Bayangkan jika kita tau bahwa dengan pemrograman kita bisa membuat sebuah program yang bermanfaat bagi orang banyak, semua dunia akan senang menggunakan program kita, bahkan dengan program itu kita bisa menjadi kaya raya, kita bisa membuat perusahaan sendiri, kita bisa membuka lapangan pekerjaan baru, dan bisa membuat orang lain bahagia dan sejahtera. Itu akan terdengar lebih menarik. Atau mungkin juga, ketika kita punya anak nanti, kita bisa membuatkan game khusus edisi spesial untuk ulang tahun anak kita, atau membuatkan website untuk keluarga bahagia kita, atau mungkin kita bisa membuat sebuah aplikasi untuk menembak gebetan kita dengan aplikasi yang super romantis. Bro.. Bayangkan banyak sekali yang bisa kita lakukan. Semakin banyak informasi yang kita tahu, maka semakin banyak juga alasan yang kita punya untuk mempelajari pemrograman.</p>  
            <br>
          <p class="lead">So, sekali lagi, kalau kamu ingin memulai belajar pemrograman, maka mengertilah terlebih dahulu apa itu pemrograman dan pengetahuan dasar yang mendukungnya, agar tidak tersesat. </p>  
            <br>
          <h2>2. Pilihlan sebuah bahasa pemrograman</h2> 
            <br>
          <img src="images/languages.png" alt="">
            <br>
          <p class="lead">Pada akhirnya kita memang harus memilih. Banyak sekali bahasa pemrograman yang ada di dunia, mulai dari bahasa mesin, bahasa tingkat rendah, bahasa tingkat menengah dan bahasa tingkat tinggi. Atau buat kamu yang masih bingung saking banyaknya bahasa pemrograman dan butuh rekomendasi juga pencerahan untuk memilih bahasa pemrograman apa yang harus kamu pelajari untuk memulai belajar, kamu bisa baca artikel</p>   
            <br>
          <p class="lead">Kamu mungkin bisa saja mempelajari semuanya, tapi saya sarankan pilihlah satu terlebih dahulu. Kuasailah satu terlebih dahulu. Dalamilah. Yang harus kita ingat adalah, bahasa pemrograman bukanlah sebuah agama yang kita hanya boleh memilih satu dan tidak bisa seenaknya kita ganti. Kamu bebas saja berganti-ganti bahasa pemrograman yang Kamu ingin kuasai nanti, jika Kamu mau. Tapi... Pelajarilah dulu satu. Kuasailah secara mendalam.</p>  
            <br>
          <h2>3. Mulailah belajar</h2>  
            <br>
          <p class="lead">Sekarang Kamu sudah tau apa itu pemrograman dan Kamu sudah punya bahasa pemrograman yang ingin Kamu kuasai, selanjutnya pelajarilah. Belajarlah algoritma dasar dengan bahasa pemrograman yang Kamu pilih. Caranya banyak sekali, bisa melalui buku, bisa juga melalui artikel-artikel di internet, tutorial-tutorial pemrograman di internet Ya, banyak sekali caranya. Silahkan Kamu pilih sendiri yang paling sesuai dengan metode belajarmu.</p>  
            <br>
          <h2>4. Buatlah program-program sederhana</h2>
            <br>
          <img src="images/slide.jpg" alt="">
            <br>
            <br>
          <p class="lead">Belajar saja tidak cukup, harus dipraktekan. Cobalah buat program-program sederhana. Jika Kamu masih sekolah, Kamu bisa mencoba membuat program sederhana untuk mata pelajaran Matematikamu, seperti membuat program “menghitung luas lingkaran”, “menghitung volume balok”. Itu sangat menarik kawan, dulu saya melakukan hal itu. Kalau Kamu adalah seorang guru, mungkin Kamu bisa membuat program untuk menjelaskan pada muridmu bagaimana sebuah planet berputar. Atau apa saja lah... Nggak mesti yang serius juga bisa, misalnya membuat program untuk mendaftar nama mantan-mantanmu. Hehehe... Pada intinya, cobalah untuk membuat sesuatu, mulai dari yang sederhana dari apa yang Kamu sudah kuasai.</p>   
            <br>
          <h2>5. Bergabunglah di grup-grup atau forum-forum pemrograman</h2>  
            <br>
          <img src="images/selection.png" alt="">  
            <br>
          <p class="lead">Kawan, Kamu tidak sendiri! Banyak sekali orang-orang sepertimu yang sedang belajar atau bahkan sudah jago. Kamu bisa menyapa mereka, bahkan Kamu bisa bertanya kepada mereka jika memang perlu.</p>  
            <br>
          <p class="lead">Ketika Kamu bergabung di forum atau grup pemrograman, Kamu akan melihat ada banyak orang hebat yang bisa Kamu tiru dan teladani dari segi programmingnya. Bahkan nggak jarang, mereka pun sering memberikan informasi-informasi penting yang mungkin bermanfaat buat Kamu. Dan ketika Kamu terlibat dalam sebuah forum, Kamu pun bisa membantu rekan-rekan yang lain yang mungkin bisa Kamu bantu. </p>  

          <blockquote class="blockquote">
            <footer class="blockquote-footer">
              <cite title="Source Title">codepolitan.com</cite>
            </footer>
          </blockquote>
          <hr>
          </div>
          <div class="col-md-2">
        
          </div>
          </div>
        </div>
    </div>
</div>
    
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bawah">
      <div class="container">
        <center><p>&copy; Company 2018-2019</p></center>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
@endsection
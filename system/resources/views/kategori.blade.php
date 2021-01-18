<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toko HP Berkah</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Toko HP Berkah</a></h1>
      <nav class="nav-menu d-none d-lg-block ">
        <ul>
         <li class=><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/produk') }}">Produk</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <div class="card my-3">
  <div class="container">
    <h4>Halaman Produk</h4>
  </div>
  <div class="card-body">
    <div class="container">
      <div class="col-12">
        <div class="row">

          <div class="card my-3">
  <div class="container">
    <h4>Halaman Produk</h4>
  </div>
  <div class="card-body">
    <div class="container">
      <div class="col-12">
        <div class="row">
<!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Kategori Yang Tersedia</h2>
          <p>Toko kami menyediakan berbagai jenis handphone yang anda inginkan, ter update, dan yang pasti dengan harga sesuai dengan kualitas.</p>
        </div>

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
@foreach($list_kategori as $kategori)
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-primary">{{$kategori->nama}}</h5>
              <p class="card-text text-muted">{{$kategori->nama}}</p>
              <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
            </div>
          </div>
        </div>
        @endforeach
<!-- sampai sini -->
      </div>
      </div>
    </div>
  </div>
</div>
    <!-- ======= Footer ======= -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Toko HP Berkah</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a>Anggi Junita</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
   @include('section.js')
  </body>

</html>
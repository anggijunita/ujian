<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toko HP Berkah</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
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

      <h1 class="logo mr-auto"><a href="index.html">Beli Hp Kuyy</a></h1>
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
<!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Produk Yang Tersedia</h2>
          <p>Kami Juga Menyediakan Beberapa Jenis Handphone Yang Kami Rekomendasikan Yang Mungkin Sesuai Kebutuhan Anda, Apalagi Anda Seorang Siswa Yang Mungkin Suka Bermain Game</p>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-header">
                 Filter
              </div>
              <div class="col-md-12">
                <form action="{{url('produk')}}" method="post"">
                  @csrf
                  <div class="form-group">
                    <label for="" class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Stok</label>
                    <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Harga Min</label>
                    <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Harga Max </label>
                    <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
                  </div>
                  <button class="btn btn-warning float-right"> <i class="fa fa-search"></i> Filter</button>
                </form>
              </div>
            </div>
          </div>
          @foreach($list as $item)
           <div class="col-lg-3 col-md-3 mt-4 d-flex align-items-stretch">
             <div class="member">
                <div class="member-img">
                    <a href="{{url('detail', $item->id)}}">
                       <img src="{{url("public/$item->foto")}}" alt="" class="img-fluid">
                </div>
                     </a>
                <div class="member-info">
                    <h5>{{$item->nama}}</h5>
                    <span>Rp. {{number_format($item->harga)}}</span>
                    <p> Stok Barang :{{($item->stok)}}</p>
               </div>
               <div class="btn-group">
                 <a href="{{url('test-ajax', $item->id)}}" class="" class="btn btn-dark"><i class="fa fa-info">Pesan Sekarang</i></a>
               </div>
                </div>
              </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="float-right">
              {{$list->links()}}
            </div>
          </div>
       </div>
    </section><!-- End Team Section -->

    <!-- ======= Footer ======= -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Beli Hp Kuyy</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a>CindyRahmawati</a>
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
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  $(".table-datatable").DataTable();
</script>
  </body>
</html>

  </body>

</html>
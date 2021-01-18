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

      <h1 class="logo mr-auto"><a href="index.html">Toko HP Berkah</a></h1>
      <nav class="nav-menu d-none d-lg-block ">
        <ul>
         <li ><a href="{{ url('/home') }}">Home</a></li>
          <li class="active"><a href="{{ url('/produk') }}">Produk</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-5">
              <div class="card">
                <div class="card-header">
                  MASUKKAN DATA ANDA DENGAN LENGKAP DAN BENAR!
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="">
                      </div>
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="text" class="form-control" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Nomor Handphone</label>
                        <input type="text" class="form-control" name="nohp" value="">
                    </div>
                </div>
                </div>
              </div>
                <div class="card">
                    <div class="card-header">
                     Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                              <div class="col-md-3">
                                <label class="control-label">Provinsi</label>
                                  <select  name="" class="form-control" onchange="gantiProvinsi(this.value)">
                                    <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                    @foreach($list_provinsi as $provinsi)
                                        <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                                    @endforeach
                                  </select>
                              </div>
                              <div class="col-md-3">
                                <label class="control-label">Kabupaten/Kota</label>
                                  <select  name="" class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
                                      <option value="">Pilih Provinsi Terlebih Dahulu</option>
                                      @foreach($list_kabupaten as $kabupaten)
                                        <option value="{{$kabupaten->id}}">{{$kabupaten->nama}}</option>
                                    @endforeach
                                  </select>
                              </div>
                              <div class="col-md-3">
                                <label class="control-label">Kecamatan</label>
                                  <select  name="" class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                                      <option value="">Pilih Kabupaten Terlebih Dahulu</option>
                                      @foreach($list_kecamatan as $kecamatan)
                                        <option value="{{$kecamatan->id}}">{{$kecamatan->nama}}</option>
                                    @endforeach
                                  </select>
                              </div>
                              <div class="col-md-3">
                                <label class="control-label">Desa</label>
                                  <select  name="" class="form-control" id="desa">
                                      <option value="">Pilih Kecamatan Terlebih Dahulu</option>
                                      @foreach($list_desa as $desa)
                                        <option value="{{$desa->id}}">{{$desa->nama}}</option>
                                    @endforeach
                                  </select>  
                              </div>       
                        </div>
                        <button class="btn btn-dark bg-success float-right mt-3"><i class="fa fa-plus">Pesan Sekarang</i></button>

                    </div> 
                </div>  
            </div>
        </div>
    </div>

@push('script')
    <script>
        function gantiProvinsi(id){
            $.get("api/provinsi/"+id, function(result){
                result = JSON.parse(result)
                option = "" 
                for (item of result){
                  option += `<option value="${id.item}">${item.nama} </option>`;
                }
                $("#kabupaten").html(option)
            });
        }
 
        function gantiKabupaten(id){
            $.get("api/kabupaten/"+id, function(result){
                result = JSON.parse(result)
                option = "" 
                for (item of result){
                  option += `<option value="${id.item}">${item.nama} </option>`;
                }
                $("#kecamatan").html(option)
            });
        }
        function gantiKecamatan(id){
            $.get("api/kecamatan/"+id, function(result){
                result = JSON.parse(result)
                option = "" 
                for (item of result){
                  option += `<option value="${id.item}">${item.nama} </option>`;
                }
                $("#desa").html(option)
            });
        }
    </script>
@endpush

<div class="mr-md-auto text-center text-md-left mt-5">
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
  <script src="{{url('public')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public')}}/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public')}}/assets/js/main.js"></script>

  </body>

</html>
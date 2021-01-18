@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row row-cols-1 row-cols-md-3">

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/oppo-1.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">OPPO A92 Smartphone </h5>
			        <p class="card-text">[8/128 GB]</p>
			        <p class="text-danger">Rp3.509.900</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/xiaomi.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Xiaomi Mi 9T Smartphone</h5>
			        <p class="card-text"> [128 GB/ 6 GB]</p>
			         <p class="text-danger">Rp4.851.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/vivo.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">VIVO V17 Pro Smartphone </h5>
			        <p class="card-text">[128 GB/ 8 GB]p>
			        <p class="text-danger">Rp3.895.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/nokia.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Nokia 5.1 Plus Smartphone </h5>
			        <p class="card-text">[64GB/ 4GB]</p>
			        <p class="text-danger">Rp2.250.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/realme.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Realme C17 Smartphone </h5>
			        <p class="card-text">[ Ram 6GB / Rom 256GB ]</p>
			        <p class="text-danger">Rp2.799.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->

<!-- Daftar produk ( Bisa di hapus dari sini) -->
			  <div class="col mb-4">
			    <div class="card h-100">
			      <img src="{{url('public/img/iphone.jpg')}}" class="img-thumbnail card-img-top" alt="...">
			      <div class="card-body">
			        <h5 class="card-title">Apple iPhone 11 Pro Max </h5>
			        <p class="card-text">(Midnight Green, 256 GB)</p>
			        <p class="text-danger">	Rp19.800.000</p>
			        <button class="btn btn-primary">Pesan</button>
			      </div>
			    </div>
			  </div>
<!-- sampai disini -->
			</div>
    	</div>
    </div>
  </div>
</div>


@endsection
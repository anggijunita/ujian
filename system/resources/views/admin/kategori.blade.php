@extends('template.base')

@section('content')

<div class="card my-3">
	<div class="container">
		<h4>Halaman Produk</h4>
	</div>
  <div class="card-body">
    <div class="container">
    	<div class="col-12">
    		<div class="row">

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">OPPO</h5>
			        <p class="card-text text-muted"> Handphone Oppo disini kami menyediakan banyak model dengan berbagai macam spesifikasi tentunya juga terjangkau</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">VIVO </h5>
			        <p class="card-text text-muted">Selain HP OPPO kita juga menyediakan berbagai macam jenis dan tipe HP VIVO harga murah kualitas bagus yang pastinya sangan cocok sekali untuk klian para pelajar maupun mahasiswa</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">REALME</h5>
			        <p class="card-text text-muted">Selain 2 Produk tadi kita juga menyediakan HP REALME ini juga tidak kalah bagusnya dibandingkan HP yang lain</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

<!-- Daftar kategori ( Bisa di hapus dari sini) -->
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title text-primary">IPHONE</h5>
			        <p class="card-text text-muted">Iphone juga tersedia loh ditoko online kita buruan di cek.</p>
			        <a href="{{url('admin/produk')}}" class="btn btn-primary">Lebih Banyak Barang</a>
			      </div>
			    </div>
			  </div>
<!-- sampai sini -->

			</div>
    	</div>
    </div>
  </div>
</div>

@endsection
@extends('template.base')
@section ('content')
 <div class="jumbotron">
  <h1 class="display-4">Selamat datang di Toko HP Berkah</h1>
  <p class="lead">Toko Handphone yang ada di Ketapang, menjual berbagai jenis handphone terbaru dengan harga tejangkau, dan kami juga menerima tukar tambah nandphone.</p>
  <hr class="my-4">
  <p>Toko handphone yang terpercaya kualitasnya di Ketapang.</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/produk')}}" role="button">Belanja Sekarang </a>
</div>
 @endsection
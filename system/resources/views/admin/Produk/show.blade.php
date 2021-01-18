@extends('template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h2>{{$produk->nama}}</h2>
						<hr>
						<p>
							Rp. {{number_format($produk->harga)}}  |
							Stok. {{$produk->stok}}  |
							Berat {{$produk->berat}} gr |
							Tanggal Produksi  {{$produk->created_at->diffForHumans()}}
						</p>
						<p>
							{!! nl2br($produk->deskripsi) !!}
						</p>
						<p>
							<img src="{{url("public/$produk->foto")}}" alt="" height="220px" width="260px">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
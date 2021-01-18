<p>
	{{$produk->harga}}  |
	Stok : {{$produk->stok}}  |
	Berat : {{$produk->berat}}gr |
	Tanggal Produksi  : {{$produk->created_at->diffForHumans()}}
</p>
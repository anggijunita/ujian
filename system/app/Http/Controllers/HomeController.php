<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;
class HomeController extends Controller
{

	function showHome(){
		return view('home');
	}

	function showProduk(){
		return view('produk');
	}

	function showKategori(){
		return view('kategori');
	}
	
	function showData(){
		return view('data');
	}

	function showTemplate(){
		return view('template.base');
	}

	function showAdminBeranda(){
		return view('admin.beranda');
	}

	function showAdminKategori(){
		return view('admin.kategori');
	}

	function showAdminProduk(){
		return view('admin.produk');
	}

	public function testCollection(){
		$list_bike = ['Honda', 'Yamaha', 'Kawasaki', 'Suzuki', 'Vespa', 'BMW', 'KTM'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		// Sort By Harga Terendah
		// dd($list_produk->sortBy('harga'));
		// Sort By Harga Tertinggi
		// dd($list_produk->sortByDesc('harga')[1]);



		// Map

		// $map = $list_produk->map(function($item){
		// 	$result['nama'] = $item->nama;
		// 	$result['harga'] = $item->harga;
		// 	return $result;	
		// });

		// foreach ($list_produk as $item){
		// 	echo "$item->nama<br>";
		// }
		// $list_produk->each(function($item){
		// 	echo "$item->nama<br>";
		// });

		// Filter

		// $filtered = $list_produk->filter(function($item){
		// 	return $item->harga < 6000000;
		// });

		// dd($filtered);

		// $sum = $list_produk->min('stok');
		// dd($sum);
		// dd($map);


		$data['list'] = Produk::Paginate(8);
		return view ('test-collection', $data);
		dd($list_bike, $list_produk);
	}

	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		$data['list_kabupaten'] = Kabupaten::all();
		$data['list_kecamatan'] = Kecamatan::all();
		$data['list_desa'] = Desa::all();
		return view ('test-ajax', $data);
	}
}
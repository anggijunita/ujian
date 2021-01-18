<?php 

namespace App\Http\Controllers;
use\App\Models\Kategori;

class KategoriController extends Controller {
	function index(){
		$data['list_kategori'] = Kategori::all();
		return view('admin/kategori.index', $data);
	}

	function create(){
		return view('admin/kategori.create');
	}
	function store(){
		$kategori = new Kategori;
		$kategori->nama = request ('nama');
		$kategori->save();

		return redirect('admin/kategori')->with('success', 'Data Kategori Berhasil Ditambahkan');
	}
	function show(Kategori $kategori){
		$data['kategori'] = $kategori; 
		return view ('admin/Kategori.show', $data);	
		
	}
	function edit(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view ('admin/kategori.edit', $data);
		
	}
	function update(Kategori $kategori){ 
		$kategori->nama = request ('nama');
		$kategori->save();

		return redirect('admin/kategori')->with('success', 'Data  Kategori Berhasil Diedit');;
	}

	function destroy(Kategori $kategori){
		$kategori->delete();
		return redirect('admin/kategori')->with('danger', 'Data Kategori Berhasil Dihapus');
	}

}
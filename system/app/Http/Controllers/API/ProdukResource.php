<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produk::all();
    }

    public function store(Request $request)
    {
        if(request('nama') && request('harga') && request('berat') && request('deskripsi') && request('stok')){

            $produk =  new Produk;
            $produk->nama = request ('nama');
            $produk->harga = request ('harga');
            $produk->berat = request ('berat');
            $produk->deskripsi = request ('deskripsi');
            $produk->stok = request ('stok');
            $produk->save();

            return collect([
                'respond' => 200,
                'data' => $produk
            ]);

        } else {
            return collect([
                'respond' => 500,
                'massage' => "Field ada yang kosong"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk) {
            return collect([
                'status' => 200, 
                'data' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'massage' => "Produk tidak ditemukan"
            ]);
        }
    }

    
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        if($produk){

            $produk =  new Produk;
            $produk->nama = request ('nama') ?? $produk->nama;
            $produk->harga = request ('harga') ?? $produk->harga;
            $produk->berat = request ('berat') ?? $produk->berat;
            $produk->deskripsi = request ('deskripsi') ?? $produk->deskripsi;
            $produk->stok = request ('stok') ?? $produk->stok;
            $produk->save();          

            return collect([
                'status' => 200, 
                'data' => $produk
            ]);
        } else {
            return collect([
                'respond' => 500,
                'massage' => "Produk tidak ditemukan"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        if($produk) {
            $produk->delete();
            return collect([
                'status' => 200, 
                'data' => 'Produk Berhasil Dihapus'
            ]);
        } else {
            return collect([
                'respond' => 500,
                'massage' => "Produk tidak ditemukan"
            ]);
        }
    }
}
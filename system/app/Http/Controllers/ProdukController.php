<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use League\CommonMark\Delimiter\Delimiter;

class ProdukController extends Controller {
    function index(){
        $User = request()->user();
        $data['list_produk'] = $User->produk;
        return view('/Produk.index', $data);
    }
    function create(){
        return view('/Produk.create');
    }
    function store(){
        $Produk = new Produk();
        $Produk->id_user = request('id_user');
        $Produk->nama = request('nama');
        $Produk->harga = request('harga');
        $Produk->deskripsi = request('deskripsi');
        $Produk->stok = request('stok');
        $Produk->save();

        return redirect('/Admin/Produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Produk $Produk){
        $data['Produk'] = $Produk;
        return view('Produk.show', $data);
    }
    function edit(Produk $Produk){
        $data['Produk'] = $Produk;
        return view('Produk.edit', $data);
    }
    function update(Produk $Produk){
        $Produk->nama = request('nama');
        $Produk->harga = request('harga');
        $Produk->deskripsi = request('deskripsi');
        $Produk->stok = request('stok');
        $Produk->save();

        return redirect('/Admin/Produk')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Produk $Produk){
        $Produk->delete();

        return redirect('/Admin/Produk')->with('danger', 'Data Berhasil Dihapus');

    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
       // $data['harga_min'] = $harga_min = explode(",", request('harga_min'));
        //$data['harga_max'] = $harga_max = explode(",", request('harga_max'));
        $data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
       // $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
       // $data['list_produk'] = Produk::whereBetween('harga', $harga_min, $harga_max)->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');

        return view('Produk.index', $data);
    }

}

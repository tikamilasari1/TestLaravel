<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPenjualanBarang extends Controller
{
    public function index()
    {
    	$data_penjualanbarang = \App\PenjualanBarangModel::all();
    	return view('penjualanbarang.index',['data_penjualanbarang'=>$data_penjualanbarang]);
    }

    public function create(Request $request)
    {
    	\App\PenjualanBarangModel::create($request->all());	
    	return redirect('penjualanbarang')->with('sukses','data berhasil di input!');
    }

     public function edit($id)
    {
    	 $penjualanbarang = \App\PenjualanBarangModel::find($id);
        return view('penjualanbarang.edit',['penjualanbarang'=>$penjualanbarang]);
    	/*$barang = \App\BarangModel::find($kode_barang);*/
    }

    public function update(Request $request,$id)
    {
    	$penjualanbarang = \App\PenjualanBarangModel::find($id);
    	$penjualanbarang->update($request->all());
    	return redirect('/penjualanbarang')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
    	$penjualanbarang= \App\PenjualanBarangModel::find($id);
    	$penjualanbarang->delete($penjualanbarang);
    	return redirect('/penjualanbarang')->with('sukses','Data berhasil didelete!');
    }
}

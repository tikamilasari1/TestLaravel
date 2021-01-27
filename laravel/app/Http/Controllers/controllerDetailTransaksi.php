<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerDetailTransaksi extends Controller
{
    public function index()
    {
    	$data_detailtransaksi = \App\DetailTransaksiModel::all();
    	return view('detailtransaksi.index',['data_detailtransaksi'=>$data_detailtransaksi]);
    }

    public function create(Request $request)
    {
    	\App\DetailTransaksiModel::create($request->all());	
    	return redirect('detailtransaksi')->with('sukses','data berhasil di input!');
    }

     public function edit($id)
    {
    	 $detailtransaksi = \App\DetailTransaksiModel::find($id);
        return view('detailtransaksi.edit',['detailtransaksi'=>$detailtransaksi]);
    	/*$barang = \App\BarangModel::find($kode_barang);*/
    }
 
    public function update(Request $request,$id)
    {
    	$detailtransaksi = \App\DetailTransaksiModel::find($id);
    	$detailtransaksi->update($request->all());
    	return redirect('/detailtransaksi')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
    	$detailtransaksi = \App\DetailTransaksiModel::find($id);
    	$detailtransaksi->delete($detailtransaksi);
    	return redirect('/detailtransaksi')->with('sukses','Data berhasil didelete!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangModel;
use DB;
class controllerBarang extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_barang = \App\BarangModel::where('nama_barang','LIKE','%'.$request->cari. '%')->get();
    	}else{
    		$data_barang = \App\BarangModel::all();
    	}
    	return view('barang.index',['data_barang'=>$data_barang]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_barang' => 'min:5'
        ]);
    	\App\BarangModel::create($request->all());	
    	return redirect('barang')->with('sukses','data berhasil di input!');

    }

    public function edit($id)
    {
    	 $barang = BarangModel::find($id);
        return view('barang.edit',['barang'=>$barang]);
    	/*$barang = \App\BarangModel::find($kode_barang);*/
    }

    public function update(Request $request,$id)
    {
    	$barang = \App\BarangModel::find($id);
    	$barang->update($request->all());
    	return redirect('/barang')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
    	$barang = \App\BarangModel::find($id);
    	$barang->delete($barang);
    	return redirect('/barang')->with('sukses','Data berhasil didelete!');
    }

}

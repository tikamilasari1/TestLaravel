<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerHadiah extends Controller
{
    public function index()
    {
    	$data_hadiah = \App\Hadiahmodel::all();
    	return view('hadiah.index',['data_hadiah'=>$data_hadiah]);
    }

    public function create(Request $request)
    {
    	\App\Hadiahmodel::create($request->all());	
    	return redirect('hadiah')->with('sukses','data berhasil di input!');
    }

     public function edit($id)
    {
    	 $hadiah = \App\Hadiahmodel::find($id);
        return view('hadiah.edit',['hadiah'=>$hadiah]);
    	/*$barang = \App\BarangModel::find($kode_barang);*/
    }

    public function update(Request $request,$id)
    {
    	$hadiah = \App\Hadiahmodel::find($id);
    	$hadiah->update($request->all());
    	return redirect('/hadiah')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
    	$hadiah = \App\Hadiahmodel::find($id);
    	$hadiah->delete($hadiah);
    	return redirect('/hadiah')->with('sukses','Data berhasil didelete!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCustomer extends Controller
{
    public function index()
    {
    	$data_customer = \App\CustomerModel::all();
    	return view('customer.index',['data_customer'=>$data_customer]);
    }

    public function create(Request $request)
    {
    	\App\CustomerModel::create($request->all());	
    	return redirect('customer')->with('sukses','data berhasil di input!');
    }

     public function edit($id)
    {
    	 $customer = \App\CustomerModel::find($id);
        return view('customer.edit',['customer'=>$customer]);
    	/*$barang = \App\BarangModel::find($kode_barang);*/
    }

    public function update(Request $request,$id)
    {
    	$customer = \App\CustomerModel::find($id);
    	$customer->update($request->all());
    	return redirect('/customer')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
    	$customer = \App\CustomerModel::find($id);
    	$customer->delete($customer);
    	return redirect('/customer')->with('sukses','Data berhasil didelete!');
    }
}

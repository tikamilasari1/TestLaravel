@extends('layouts.master')
 
@section('content') 
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form action="/penjualanbarang/{{$penjualanbarang->id}}/update" method="POST">
										{{csrf_field()}}
									  <div class="form-group">
	 								    <label for="exampleInputEmail1">Kode Barang</label>
									    <input name="id_barang" type="integer" class="form-control" id="id_barang" aria-describedby="emailHelp" value="{{$penjualanbarang->id_barang}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Jumlah</label>
									    <input name="jumlah" type="integer" class="form-control" id="jumlah" aria-describedby="emailHelp" value="{{$penjualanbarang->jumlah}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Harga</label>
									    <input name="harga" type="integer" class="form-control" id="harga" aria-describedby="emailHelp" value="{{$penjualanbarang->harga}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Total Harga</label>
									    <input name="total" type="integer" class="form-control" id="total" aria-describedby="emailHelp" value="{{$penjualanbarang->total}}">
									  </div>
								
										<div class="modal-footer">
								 		<button type="submit" class="btn btn-warning">Update</button>
								 		</div>
								 	</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content')

		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-lg-8">
			<form action="/penjualanbarang/{{$penjualanbarang->id}}/update" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Kode Barang</label>
			    <input name="kode_barang" type="integer" class="form-control" id="kode_barang" aria-describedby="emailHelp" value="{{$penjualanbarang->id_barang}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah</label>
			    <input name="jumlah" type="integer" class="form-control" id="jumlah" aria-describedby="emailHelp" value="{{$penjualanbarang->jumlah}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Harga</label>
			    <input name="harga" type="integer" class="form-control" id="harga" aria-describedby="emailHelp" value="{{$penjualanbarang->harga}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Total Harga</label>
			    <input name="total" type="integer" class="form-control" id="total" aria-describedby="emailHelp" value="{{$penjualanbarang->total}}">
			  </div>
		
			<div class="modal-footer">
		 		<button type="submit" class="btn btn-warning">Update</button>
		 		</form>
		 		</div>
		 		</div>
			</div>
		</div>
@endsection
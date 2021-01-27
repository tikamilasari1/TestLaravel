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
									<form action="/barang/{{$barang->id}}/update" method="POST">
										{{csrf_field()}}
									  <div class="form-group">
									    <label for="exampleInputEmail1">Nama Barang</label>
									    <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" value="{{$barang->nama_barang}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Harga</label>
									    <input name="harga" type="text" class="form-control" id="harga" aria-describedby="emailHelp" value="{{$barang->harga}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Stok</label>
									    <input name="stok" type="text" class="form-control" id="stok" aria-describedby="emailHelp" value="{{$barang->stok}}">
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
			<form action="/barang/{{$barang->id}}/update" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Barang</label>
			    <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" value="{{$barang->nama_barang}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Harga</label>
			    <input name="harga" type="text" class="form-control" id="harga" aria-describedby="emailHelp" value="{{$barang->harga}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Stok</label>
			    <input name="stok" type="text" class="form-control" id="stok" aria-describedby="emailHelp" value="{{$barang->stok}}">
			  </div>
		
			<div class="modal-footer">
		 		<button type="submit" class="btn btn-warning">Update</button>
		 		</form>
		 		</div>
		 		</div>
			</div>
		</div>
@endsection
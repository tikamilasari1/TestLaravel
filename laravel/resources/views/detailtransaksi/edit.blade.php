@extends('layouts.master')
 
@section('content') 
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input</h3>
								</div>
								<div class="panel-body">
									<form action="/detailtransaksi/{{$detailtransaksi->id}}/update" method="POST">
										{{csrf_field()}}
									  <div class="form-group">
									    <label for="exampleInputEmail1">Tanggal</label>
									    <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" value="{{$detailtransaksi->tanggal}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Kode Customer</label>
									    <input name="id_customer" type="integer" class="form-control" id="id_customer" aria-describedby="emailHelp" value="{{$detailtransaksi->id_customer}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Total</label>
									    <input name="total" type="integer" class="form-control" id="total" aria-describedby="emailHelp" value="{{$detailtransaksi->total}}">
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
			<form action="/detailtransaksi/{{$detailtransaksi->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="form-group">
			    <label for="exampleInputEmail1">Id Penjualan</label>
			    <input name="id_penjualan" type="integer" class="form-control" id="id_penjualan" aria-describedby="emailHelp" value="{{$detailtransaksi->id_penjualan}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Tanggal</label>
			    <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="emailHelp" value="{{$detailtransaksi->tanggal}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Kode Customer</label>
			    <input name="id_customer" type="integer" class="form-control" id="id_customer" aria-describedby="emailHelp" value="{{$detailtransaksi->id_customer}}">
			  </div>
			<div class="modal-footer">
		 		<button type="submit" class="btn btn-warning">Update</button>
		 		</form>
		 		</div>
		 		</div>
			</div>
		</div>
@endsection
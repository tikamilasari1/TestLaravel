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
									<form action="/customer/{{$customer->id}}/update" method="POST">
										{{csrf_field()}}
									  <div class="form-group">
									    <label for="exampleInputEmail1">Nama Customer</label>
									    <input name="nama_customer" type="text" class="form-control" id="nama_customer" aria-describedby="emailHelp" value="{{$customer->nama_customer}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Alamat Customer</label>
									    <input name="alamat_customer" type="text" class="form-control" id="alamat_customer" aria-describedby="emailHelp" value="{{$customer->alamat_customer}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">No Tlp Customer</label>
									    <input name="no_tlp" type="text" class="form-control" id="no_tlp" aria-describedby="emailHelp" value="{{$customer->no_tlp}}">
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
			<form action="/customer/{{$customer->id}}/update" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Customer</label>
			    <input name="nama_customer" type="text" class="form-control" id="nama_customer" aria-describedby="emailHelp" value="{{$customer->nama_customer}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Alamat Customer</label>
			    <input name="alamat_customer" type="text" class="form-control" id="alamat_customer" aria-describedby="emailHelp" value="{{$customer->alamat_customer}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">No Tlp Customer</label>
			    <input name="no_tlp" type="text" class="form-control" id="no_tlp" aria-describedby="emailHelp" value="{{$customer->no_tlp}}">
			  </div>
			<div class="modal-footer">
		 		<button type="submit" class="btn btn-warning">Update</button>
		 		</form>
		 		</div>
		 		</div>
			</div>
		</div>
@endsection
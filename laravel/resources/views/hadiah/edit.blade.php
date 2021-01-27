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
									<form action="/hadiah/{{$hadiah->id}}/update" method="POST">
	 									{{csrf_field()}}
									  <div class="form-group">
									    <label for="exampleInputEmail1">Jenis Hadiah</label>
									    <input name="jenis_hadiah" type="text" class="form-control" id="jenis_hadiah" aria-describedby="emailHelp" value="{{$hadiah->jenis_hadiah}}">
									  </div>
									  <div class="form-group">
									    <label for="exampleInputEmail1">Jumlah Point</label>
									    <input name="jumlah_point" type="integer" class="form-control" id="jumlah_point" aria-describedby="emailHelp" value="{{$hadiah->jumlah_point}}">
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
			<form action="/hadiah/{{$hadiah->id}}/update" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jenis Hadiah</label>
			    <input name="jenis_hadiah" type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" value="{{$hadiah->jenis_hadiah}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah Point</label>
			    <input name="jumlah_point" type="integer" class="form-control" id="jumlah_point" aria-describedby="emailHelp" value="{{$hadiah->jumlah_point}}">
			  </div>
			<div class="modal-footer">
		 		<button type="submit" class="btn btn-warning">Update</button>
		 		</form>
		 		</div>
		 		</div>
			</div>
		</div>
@endsection
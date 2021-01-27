@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Barang</h3>
									<div class="right">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
										</button>
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
									</div>
									
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<td>Kode Barang</td>
												<td>Nama Barang</td>
												<td>Harga</td>
												<td>Stok</td>
												<td>Aksi</td>
											</tr>
										</thead>
										<tbody>
											@foreach($data_barang as $barang)
											<tr>
												<td>{{$barang->id}}</td>
												<td>{{$barang->nama_barang}}</td>
												<td>{{$barang->harga}}</td>
												<td>{{$barang->stok}}</td>
												<td>
													<a href="/barang/{{$barang->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/barang/{{$barang->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ingin dihapus?')" >Delete</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Input Data Barang</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
			<form action="/barang/create" method="POST">
				{{csrf_field()}}
			  <div class="form-group {{$errors->has('nama_barang') ? 'has-error' : ''}}">
			    <label for="exampleInputEmail1">Nama Barang</label>
			    <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp">
			    @if($errors->has('nama_barang'))
			    	<span class="help-block">{{$errors->first('nama_barang')}}</span>
			    @endif
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Harga</label>
			    <input name="harga" type="text" class="form-control" id="harga" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Stok</label>
			    <input name="stok" type="text" class="form-control" id="stok" aria-describedby="emailHelp">
			  </div>
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		 		<button type="submit" class="btn btn-primary">Submit</button>
		 		</form>
			</div>
		</div>
	</div>
</div>

@stop

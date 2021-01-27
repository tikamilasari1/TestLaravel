@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Customer</h3>
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
												<td>Kode Customer</td>
												<td>Nama Customer</td>
												<td>Alamat Customer</td>
												<td>No Tlp</td>
												<td>Aksi</td>
											</tr>
										</thead>
										<tbody>
											@foreach($data_customer as $customer)
											<tr>
												<td>{{$customer->id}}</td>
												<td>{{$customer->nama_customer}}</td>
												<td>{{$customer->alamat_customer}}</td>
												<td>{{$customer->no_tlp}}</td>
												<td>
													<a href="/customer/{{$customer->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/customer/{{$customer->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ingin dihapus?')" >Delete</a>
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
		<h5 class="modal-title" id="exampleModalLabel">Input Data Customer</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
			<form action="/customer/create" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nama Customer</label>
			    <input name="nama_customer" type="text" class="form-control" id="nama_customer" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Alamat Customer</label>
			    <input name="alamat_customer" type="text" class="form-control" id="alamat_customer" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">No Tlp Customer</label>
			    <input name="no_tlp" type="text" class="form-control" id="no_tlp" aria-describedby="emailHelp">
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

@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Transaksi</h3>
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
												<td>Id Transaksi</td>
												<td>Id Penjualan</td>
												<td>Tanggal Penjualan</td>
												<td>Kode Customer</td>
												<td>Total</td>
												<td>Aksi</td>
											</tr>
										</thead>
										<tbody>
											@foreach($data_detailtransaksi as $detailtransaksi)
											<tr>
												<td>{{$detailtransaksi->id}}</td>
												<td>{{$detailtransaksi->id_penjualan}}</td>
												<td>{{$detailtransaksi->tanggal}}</td>
												<td>{{$detailtransaksi->id_customer}}</td>
												<td>{{$detailtransaksi->total}}</td>
												<td>
													<a href="/detailtransaksi/{{$detailtransaksi->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/detailtransaksi/{{$detailtransaksi->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ingin dihapus?')" >Delete</a>
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
		<h5 class="modal-title" id="exampleModalLabel">Input Data Penjualan</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
			<form action="/detailtransaksi/create" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Id Penjualan</label>
			    <input name="id_penjualan" type="integer" class="form-control" id="id_penjualan" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Tanggal</label>
			    <input name="tanggal" type="date" class="form-control" id="tanggal" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Kode Customer</label>
			    <input name="id_customer" type="integer" class="form-control" id="id_customer" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Total Harga</label>
			    <input name="total" type="integer" class="form-control" id="total" aria-describedby="emailHelp">
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

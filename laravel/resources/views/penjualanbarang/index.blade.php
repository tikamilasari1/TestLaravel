@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Penjualan</h3>
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
												<td>Id Penjualan</td>
												<td>Kode Barang</td>
												<td>Jumlah</td>
												<td>Harga</td>
												<td>Total</td>
												<td>Aksi</td>
											</tr>
										</thead>
										<tbody>
											@foreach($data_penjualanbarang as $penjualanbarang)
											<tr>
												<td>{{$penjualanbarang->id}}</td>
												<td>{{$penjualanbarang->id_barang}}</td>
												<td>{{$penjualanbarang->jumlah}}</td>
												<td>{{$penjualanbarang->harga}}</td>
												<td>{{$penjualanbarang->total}}</td>
												<td>
													<a href="/penjualanbarang/{{$penjualanbarang->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/penjualanbarang/{{$penjualanbarang->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ingin dihapus?')" >Delete</a>
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
			<form action="/penjualanbarang/create" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Kode Barang</label>
			    <input name="id_barang" type="text" class="form-control" id="id_barang" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah</label>
			    <input name="jumlah" type="integer" class="form-control" id="jumlah" aria-describedby="emailHelp">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">harga</label>
			    <input name="harga" type="integer" class="form-control" id="harga" aria-describedby="emailHelp">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputEmail1">total</label>
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

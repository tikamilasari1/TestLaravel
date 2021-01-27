@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Hadiah</h3>
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
												<td>Id Hadiah</td>
												<td>Jenis Hadiah</td>
												<td>Jumlah Point</td>
												<td>Aksi</td>
											</tr>
										</thead>
										<tbody>
											@foreach($data_hadiah as $hadiah)
											<tr>
												<td>{{$hadiah->id}}</td>
												<td>{{$hadiah->jenis_hadiah}}</td>
												<td>{{$hadiah->jumlah_point}}</td>
												<td>
													<a href="/hadiah/{{$hadiah->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
													<a href="/hadiah/{{$hadiah->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ingin dihapus?')" >Delete</a>
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
		<h5 class="modal-title" id="exampleModalLabel">Input Data Hadiah</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
		<div class="modal-body">
			<form action="/hadiah/create" method="POST">
				{{csrf_field()}}
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jenis Hadiah</label>
			    <input name="jenis_hadiah" type="text" class="form-control" id="jenis_hadiah" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Jumlah Point</label>
			    <input name="jumlah_point" type="integer" class="form-control" id="jumlah_point" aria-describedby="emailHelp">
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

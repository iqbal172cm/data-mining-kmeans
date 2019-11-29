@extends('admin.layouts.main')

@section('title', 'pegawai')

@section('contents')
<div class="container-fliud">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<a href="{{ route('pegawai_create')}}" class="btn btn-primary">Tambah Data</a>
		<div class="x_panel">
			<div class="x_title">
				<h2>Data Pegawai</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table class="table table-striped">
						<thead>
							<tr>
								<td>No</td>
								<td>Nama</td>
								<td>Jabatan</td>
								<td>No. Telpon</td>
								<td>email</td>
								<td colspan="2">Aksi</td>
							</tr>
						</thead>

						<tbody>
						<?php $no = 1; ?>
						@foreach($pegawai as $p)
							<tr>
								<th scope="row">{{ $no++ }}</th>
								<td>{{ $p->name }}</td>
								<td>{{ $p->role }}</td>
								<td>{{ $p->phone }}</td>
								<td>{{ $p->email }}</td>
								<!-- <td><a href="{{ route('pegawai_edit', ['id' => $p->uuid ]) }}" class="fa fa-edit"> Edit</a></td> -->
								<!-- <td>
									<form action="{{ route('pegawai_delete') }}" method="post">
										@csrf
										<input type="hidden" name="id" value="{{ $p->uuid }}">
										<button class="fa fa-trash-o">Hapus</button>
									</form>
								</td> -->
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Aksi
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item fa fa-edit" href=" {{ route('pegawai_edit', ['id' => $p->uuid ]) }} ">Edit</a>
											<form action="{{ route('pegawai_delete') }}" method="post">
												@csrf
												<input type="hidden" name="id" value="{{ $p->id }}">
												<!-- <a class="dropdown-item" href="#">Hapus</a> -->
												<a class="dropdown-item fa fa-trash" href="{{ route('pegawai_delete', ['id' => $p->uuid]) }} ">Delete</a>
											</form>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
</div>
@endsection


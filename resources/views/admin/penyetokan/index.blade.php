@extends('admin.layouts.main')

@section('title', 'penyetokan')

@section('contents')
<div class="container-fliud">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<a href="{{ route('penyetokan_create')}}" class="btn btn-primary">Tambah Data</a>
		<div class="x_panel">
			<div class="x_title">
				<h2>Data Penjualan</h2>
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
								<td>Nama Produk</td>
								<td>Penyetokan</td>
								<td>Tgl Pembelian</td>
								{{-- <td>Tujuan</td> --}}
								<td colspan="2">Aksi</td>
							</tr>
						</thead>

						<tbody>
						<?php $no = 1; ?>
						@foreach($penyetokan as $p)
							<tr>
								<th>{{ $no++ }}</th>
								<td>{{ $p->produk->nm_produk }}</td>
								<td>{{ $p->penyetokan }} Ton</td>
								<td>{{ $p->tgl_stok }}</td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Aksi
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item fa fa-edit" href=" {{ route('penyetokan_edit', ['id' => $p->uuid ]) }} ">Edit</a>
											<form action="{{ route('penyetokan_delete') }}" method="post">
												@csrf
												<input type="hidden" name="id" value="{{ $p->id }}">
												<!-- <a class="dropdown-item" href="#">Hapus</a> -->
												<a class="dropdown-item fa fa-trash" href="{{ route('penyetokan_delete', ['id' => $p->uuid]) }} ">Delete</a>
											</form>
										</div>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<br>

					{{ $penyetokan->links() }}
					
				</div>
			</div>
		</div>
</div>
@endsection


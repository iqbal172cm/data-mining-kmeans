@extends('admin.layouts.main')

@section('title', 'produk')
  
@section('contents')
<div class="container-fluid">
		<div class="col-md-9 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Edit Olahan</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form action="{{ route('produk_update', ['id' => $produk->id ]) }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="put">

                        <div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Nama Produk</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="text" name="nm_produk" value="{{ $produk->nm_produk }}" class="form-control" placeholder="Nama Pengolahan">
							</div>
						</div>

						{{-- <div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Pengolahan</label>
								<div class="col-md-9 col-sm-9">
									<select name="olahan" class="select2_single form-control" value="{{ $produk->olahan}}">
											@foreach($olahan as $p)
												<option value="{{ $p->olahan }}">{{ $p->olahan}}</option>
											@endforeach
									</select>
								</div>
						</div> --}}

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Stok</label>
							<div class="col-md-9 col-sm-9">
								<input type="text" name="stock" value="{{ $produk->stock }}" class="form-control" placeholder="Stok Produk">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Pengolahan</label>
								<div class="col-md-9 col-sm-9">
									<select name="satuan" class="select2_single form-control" value="{{ $produk->satuan }}" >
										<option value="#"></option>
										<option value="kg" {{ $produk->satuan == 'kg' ? 'selected' : '' }}>KG</option>
									</select>
								</div>
						</div>
						
						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Expired</label>
							<div class="col-md-9 col-sm-9">
								<input type="text" name="expired" value="{{ $produk->expired }}" class="form-control" placeholder="Stok Produk">
							</div>
						</div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Gambar </label>
							<div class="col-md-9 col-sm-9 ">
                                <input type="file" name="gambar">
							</div>
							<img class="col-md-3 col-sm-3 offset-md-3" width="150px" src="{{ asset('uploads/'.$produk->gambar) }}">
                        </div>

						<div class="ln_solid"></div>
						<div class="form-group row">
							<div class="col-md-9 col-sm-9  offset-md-3">
								<a href="{{ route('produk') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
								<button class="btn btn-primary" type="reset">Reset</button>
								<button type="submit" class="btn btn-success">Simpan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
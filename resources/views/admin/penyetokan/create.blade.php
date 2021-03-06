@extends('admin.layouts.main')

@section('title', 'Penyetokan')
	
@section('contents')
	<div class="container-fluid">
		<div class="col-md-9 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add Penyetokan</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form class="form-label-left input_mask" action="{{ route('penyetokan_store') }}" method="post">
						{{ csrf_field() }}
                        
                        {{-- <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3">Nama Produk</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="nm_produk" class="select2_single form-control">
                                        @foreach($produk as $p)
									<option value="{{ $p->id }} "> {{ $p->nm_produk}} ({{ $p->stock }})</option>
                                        @endforeach
                                    </select>
                                </div>
						</div> --}}

						<div class="form-group row">
								<label class="col-form-label col-md-3 col-sm-3">Nama Produk</label>
									<div class="col-md-9 col-sm-9">
										<select name="nm_produk" class="select2_single form-control" @error('nm_produk') is-valid @enderror" value="{{ old('nm_produk') }}" required autocomplete="nm_produk">
											<option value=""></option>
											@foreach($produk as $p)
												<option value="{{ $p->id }} "> {{ $p->nm_produk}} ({{ $p->stock }})</option>
											@endforeach
										</select>
									</div>
							</div>
						

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Penyetokan</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="number" name="penyetokan" class="form-control" @error('penyetokan') is-valid @enderror" value="{{ old('penyetokan') }}" required autocomplete="penyetokan" placeholder="Banyak Produk">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Tanggal Penyetokan</label>
							<div class="col-md-9 col-sm-9 ">
                                <input type="date" name="tgl_stok" class="form-control @error('tgl_stok') is-invalid @enderror" name="tgl_stok" value="{{ old('tgl_stok') }}" required autocomplete="tgl_stok"  placeholder="Tanggal Penjualan">
                            </div>
                        </div>
						
						<div class="ln_solid"></div>
						<div class="form-group row">
							<div class="col-md-9 col-sm-9  offset-md-3">
							<a href="{{ route('penjualan') }}"></a><button type="button" class="btn btn-danger">Cancel</button>
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
@extends('admin.layouts.main')

@section('title', 'Penjualan')
	
@section('contents')
	<div class="container-fluid">
		<div class="col-md-9 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add Penjualan</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form class="form-label-left input_mask" action="{{ route('penjualan_store') }}" method="post">
						{{ csrf_field() }}
                        
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3">Nama Produk</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="nm_produk" class="select2_single form-control"  @error('nm_produk') is-valid @enderror" value="{{ old('nm_produk') }}" required autocomplete="nm_produk" >
										<option value=""></option>
                                        @foreach($produk as $p)
											<option value="{{ $p->id }} "> {{ $p->nm_produk}} ({{ $p->stock }})</option>
                                        @endforeach
                                    </select>
                                </div>
						</div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3">Pengolahan</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="olahan" class="select2_single form-control" tabindex="-1">
										<option value=""></option>
                                        @foreach($olahan as $p)
                                            <option value="{{ $p->olahan }} "> {{ $p->olahan }} </option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Pembelian</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="number" name="penjualan" class="form-control"  @error('penjualan') is-valid @enderror" value="{{ old('penjualan') }}" required autocomplete="penjualan" placeholder="Banyak Produk">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Tanggal Penjualan</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="date" name="tgl_penjualan" class="form-control"  @error('tgl_penjualan') is-valid @enderror" value="{{ old('tgl_penjualan') }}" required autocomplete="tgl_penjualan" placeholder="Tanggal Penjualan">
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group row">
							<div class="col-md-9 col-sm-9  offset-md-3">
								<a href="{{ route('penjualan')}}">
									<button href="" type="button" class="btn btn-danger">Cancel</button>
								</a>
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
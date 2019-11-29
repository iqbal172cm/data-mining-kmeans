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
                                    <select name="nm_produk" class="select2_single form-control">
                                        @foreach($produk as $p)
									<option value="{{ $p->id }} "> {{ $p->nm_produk}} ({{ $p->stock }})</option>
                                        @endforeach
                                    </select>
                                </div>
						</div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3">Pengolahan</label>
                                <div class="col-md-9 col-sm-9">
                                    <select name="olahan" class="select2_single form-control">
                                        @foreach($olahan as $p)
                                            <option value="{{ $p->olahan }} "> {{ $p->olahan}} </option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Pembelian</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="number" name="penjualan" class="form-control" placeholder="Banyak Produk">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Tanggal Penjualan</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="date" name="tgl_penjualan" class="form-control placeholder="Tanggal Penjualan">
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
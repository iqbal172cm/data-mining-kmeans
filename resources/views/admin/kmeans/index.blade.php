@extends('admin.layouts.main')

@section('title', 'k-means')

@section('contents')
<div class="container-fluid">
		<div class="col-md-9 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Proses K-Means Clustering</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form class="form-label-left input_mask" action="{{ route('kmeans.kmeans')}}" method="post">
						{{ csrf_field() }}
						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Tahun 1</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="number" name="tahun1" class="form-control" placeholder="Masukan Tahun">
							</div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Tahun 2</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" name="tahun2" class="form-control" placeholder="Masukan Tahun">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Tahun 3</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" name="tahun3" class="form-control" placeholder="Masukan Tahun">
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
</div>
    
@endsection

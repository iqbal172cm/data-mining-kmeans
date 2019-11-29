@extends('admin.layouts.main')

@section('title', 'Olahan')
  
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
					<form action="{{ route('olahan_update', ['id' => $olahan->id ]) }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="put">
						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Nama Pengolahan</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="text" name="olahan" value="{{ $olahan->olahan }}" class="form-control" placeholder="Nama Pengolahan">
							</div>
						</div>

						<div class="ln_solid"></div>
						<div class="form-group row">
							<div class="col-md-9 col-sm-9  offset-md-3">
								<a href="{{ route('olahan') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
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

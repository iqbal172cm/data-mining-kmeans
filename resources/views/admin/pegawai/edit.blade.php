@extends('admin.layouts.main')

@section('title', 'Pegawai')
  
@section('contents')
<div class="container-fluid">
		<div class="col-md-9 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Edit Pegawai</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form action="{{ route('pegawai_update', ['id' => $pegawai->id ]) }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="post">
						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Nama Pegawai</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="text" name="name" value="{{ $pegawai->name }}" class="form-control" placeholder="Nama Pegawai">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Pengolahan</label>
								<div class="col-md-9 col-sm-9">
									<select name="role" class="select2_single form-control" value="{{ $pegawai->role }}" >
										<option value="#"></option>
										<option value="admin" {{ $pegawai->role == 'admin' ? 'selected' : '' }}>Admin</option>
										<option value="staf" {{ $pegawai->role == 'staf' ? 'selected' : '' }}>Staf</option>
										<option value="leader" {{ $pegawai->role == 'leader' ? 'selected' : '' }}>Pimpinan</option>
									</select>
								</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">No Telpon</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="number" name="phone" value="{{ $pegawai->phone }}" class="form-control" placeholder="No. Telpon">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">{{ __('E-Mail Address') }}</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="text" name="email" value="{{ $pegawai->email }}" class="form-control" placeholder="Email">   
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-form-label col-md-3 col-sm-3">{{ __('Password') }}</label>

							<div class="col-md-9 col-ms-9">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">

								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

			<div class="form-group row">
				<label for="password-confirm" class="col-form-label col-md-3 col-sm-3">{{ __('Confirm Password') }}</label>

				<div class="col-md-9">
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Confirm password">
				</div>
			</div>
						<div class="ln_solid"></div>
						<div class="form-group row">
							<div class="col-md-9 col-sm-9  offset-md-3">
								<a href="{{ route('pegawai') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
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
@extends('admin.layouts.main')

@section('title', 'Pegawai')
	
@section('contents')
	<div class="container-fluid">
		<div class="col-md-9 ">
			<div class="x_panel">
				<div class="x_title">
					<h2>Add Pegawai</small></h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<br />
					<form class="form-label-left input_mask" action="{{ route('pegawai_store') }}" method="post">
						{{ csrf_field() }}

						<!-- <div class="col-md-12 col-sm-12  form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>

						<div class="col-md-12 col-sm-12  form-group has-feedback">
							<input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
							<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
						</div>

						<div class="col-md-12 col-sm-12  form-group has-feedback">
							<input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
							<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
						</div>

						<div class="col-md-12 col-sm-12  form-group has-feedback">
							<input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
							<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
						</div> -->

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">Nama Pegawai</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="text" name="name" class="form-control" @error('name') is-valid @enderror" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama Pegawai">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">Jabatan</label>
								<div class="col-md-9 col-sm-9">
									<select name="role" class="select2_single form-control" tabindex="-1" @error('role') is-valid @enderror" value="{{ old('role') }}" required autocomplete="role">
										<option value=""></option>
										<option value="admin">Admin</option>
										<option value="staf">Staf</option>
										<option value="leader">Pimpinan</option>
									</select>
								</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3 ">No Telpon</label>
							<div class="col-md-9 col-sm-9 ">
								<input type="number" name="phone" class="form-control" @error('phone') is-valid @enderror" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Telpon">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3 col-sm-3">{{ __('E-Mail Address') }}</label>
							<div class="col-md-9 col-sm-9 ">
								<input name="email" id="email" type="email" class="form-control @error('email') is-valid @enderror" value="{{ old('email') }}" required autocomplete="email"  placeholder="E-Mail">
							
								@error('email')
									<span>
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
                            <label for="password" class="col-form-label col-md-3 col-sm-3">{{ __('Password') }}</label>

                            <div class="col-md-9 col-ms-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                		</div>

						<div class="form-group row">
                            <label for="password-confirm" class="col-form-label col-md-3 col-sm-3">{{ __('Confirm Password') }}</label>

                            <div class="col-md-9 col-sm-9">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="confirmation-password"  placeholder="Confirm password">
								
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
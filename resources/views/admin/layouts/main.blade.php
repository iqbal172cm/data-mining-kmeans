<!DOCTYPE html>
<html lang="en">
	<head>
			<title> @yield('title', 'Admin') </title>
			
			@include('admin.layouts.partial.meta')
		
	</head>

	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="{{ route('home')}}" class="site_title">
								<span>
									<img src="{{ asset('assets/front/images/logo.png') }}" width="30%" alt="">Data Mining
								</span>
							</a>
						</div>
						
						<div class="clearfix"></div>

						<!-- menu profile quick info -->
						<div class="profile clearfix">
							<div class="profile_pic">
							<img src="{{ asset('assets')}}/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Welcome,</span>
								<h2>John Doe</h2>
							</div>
						</div>
						<!-- /menu profile quick info -->

						<br />

						<!-- sidebar menu -->
					 @include('admin.layouts.partial.side')
						<!-- /sidebar menu -->

						<!-- /menu footer buttons -->
						<div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" title="Settings">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="FullScreen">
								<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Lock">
								<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
								<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
							</a>
						</div>
						<!-- /menu footer buttons -->
					</div>
				</div>

				<!-- top navigation -->
			 @include('admin.layouts.partial.header')
				<!-- /top navigation -->

				<!-- page content -->
				<div class="right_col" role="main">
					
					@yield('contents')
					
				</div>
				<!-- /page content -->

				<!-- footer content -->
				@include('admin.layouts.partial.footer')
				<!-- /footer content -->
			</div>
		</div>
				@include('admin.layouts.partial.script')
		
	</body>
</html>

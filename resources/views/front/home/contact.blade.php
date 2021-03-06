@extends('front.layouts.main')

@section('title', 'Perinus Makassar')

@section('contents')
<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Kontak Informasi</h3>
						<ul>
							<li class="address">Jl. Sabutung 1 No.1 PAOTERE, <br> Kec. Ujung Tanah, Kota Makassar</li>
							<li class="phone"><a href="tel://04113628812">(0411) 3628812</a></li>
							<li class="email"><a href="mailto:operasional@perinus.co.id">operasional@perinus.co.id</a></li>
							<li class="url"><a href="http://perinus.co.id">perinus.co.id</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					{{-- <h3>Get In Touch</h3> --}}
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" id="fname" class="form-control" placeholder="Nama Depan">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="lname" class="form-control" placeholder="Nama Belakang">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Email anda">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" id="subject" class="form-control" placeholder="Judul Pesan">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Ketik Sesuatu"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Kirim Pesan" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
</div>

@endsection
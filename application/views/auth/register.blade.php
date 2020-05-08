@extends('templates.auth')


@section('auth.content')

<div class="content content-fixed content-auth">
	<div class="container">
	  <div class="media align-items-stretch justify-content-center ht-100p">
		<div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
		  <div class="pd-t-20 wd-100p">
			<h4 class="tx-color-01 mg-b-5">Buat akun</h4>
			<p class="tx-color-03 tx-16 mg-b-40">Laporan kejadian darurat kamu  kepada petugas.</p>

			<div class="form-group">
			  <label>Nama panjang</label>
			  <input type="text" class="form-control" placeholder="Masukan nama panjang kamu..">
			</div>
			<div class="form-group">
			  <div class="d-flex justify-content-between mg-b-5">
				<label class="mg-b-0-f">Nomor telepon <i class="tx-gray-500">(yang sedang digunakan)</i></label>
			  </div>
			  <div class="input-group">
				 <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">+62 🇮🇩</span>
				  </div>
				  <input type="number" class="form-control" placeholder="contoh 8525414****">
			  </div>
			</div>
			<div class="form-group">
			  <label>Alamat email</label>
			  <input type="email" class="form-control" placeholder="Masukan alamat email..">			  
			</div>
			<div class="form-group">
			  <label>Kata sandi</label>
			  <input type="password" class="form-control" placeholder="Masukan kata sandi..">
			</div>
			<div class="form-group tx-12">
			  Dengan <strong>mendaftar</strong> berarti kamu sudah menyetujui semua syarat dan kententuan yang ada.
			</div><!-- form-group -->

			<button class="btn btn-brand-02 btn-block">Buat akun</button>
			
			<div class="tx-13 mg-t-20 tx-center">Kamu sudah punya akun? <a href="{{ url('/login')  }}">Login sekarang</a></div>
		  </div>
		</div><!-- sign-wrapper -->
		<div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
		  <div class="mx-lg-wd-500 mx-xl-wd-550">
			<img src="{{ asset('img/vectors/first_aid.png') }}" class="img-fluid" alt="">
		  </div>
	
		</div><!-- media-body -->
	  </div><!-- media -->
	</div><!-- container -->
  </div><!-- content -->

  <footer class="footer">
	<div>
	  <span>&copy; 2019 DashForge v1.0.0. </span>
	  <span>Created by <a href="http://themepixels.me">ThemePixels</a></span>
	</div>
	<div>
	  <nav class="nav">
		<a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
		<a href="../../change-log.html" class="nav-link">Change Log</a>
		<a href="https://discordapp.com/invite/RYqkVuw" class="nav-link">Get Help</a>
	  </nav>
	</div>
  </footer>
@endsection

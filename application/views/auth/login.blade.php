@extends('templates.auth')



@section('auth.content')
<section> 	
	  <div class="content content-fixed content-auth">
		<div class="container">
		  <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
			<div class="media-body align-items-center d-none d-lg-flex">
			  <div class="mx-wd-600">
				<img src="{{ asset('img/vectors/aid_help.png') }}" class="img-fluid" alt="">
			  </div>			
			 </div><!-- media-body -->
			<form method="POST">
				<div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
					<div class="wd-100p">
						<h3 class="tx-color-01 mg-b-5">Login</h3>
						<p class="tx-color-03 tx-16 mg-b-40">Selamat datang kembali, bagaiman kabarmu?</p>
		
						<div class="form-group">
							<label>Alamat email <span class="tx-danger">*</span></label>
							<input type="text" class="form-control" name="email" placeholder="Contoh : contoh@email.com">
							{!! form_error('email') !!}
						</div>
						<div class="form-group">
							<div class="d-flex justify-content-between mg-b-5">
								<label class="mg-b-0-f">Password  <span class="tx-danger">*</span></label>					
							</div>
							<input type="password" name="password" class="form-control" placeholder="Masukan kata sandi..">
							{!! form_error('password') !!}
						</div>
						<button class="btn btn-brand-02 btn-block" name="btn-login">Login</button>
						<div class="divider-text">or</div>							
						<div class="tx-13 mg-t-20 tx-center">Belum punya akun? <a href="{{ url('/register')  }}">Buat akun saya</a></div>
					</div>
				</div><!-- sign-wrapper -->
			</form>
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
</section>
@endsection




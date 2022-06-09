@extends('layouts.signin-signup')

@section('container')
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4 mb-4">
							<img src="https://dashboard.sellerkit.id/assets/img/icons/sellerkit-logo.png" width="45%">
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">

									@if (session()->has('success'))
										<div class="alert alert-success alert-dismissible fade show" role="alert">
										{{ session('success') }}
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
									@endif

									@if (session()->has('signinError'))
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											{{ session('signinError') }}
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
									@endif

									<form action="proses-sign-in" method="POST">
										@csrf
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Masukkan username" minlength="3" maxlength="50" required/>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" minlength="8" maxlength="32" required/>
											<small>
												<a href="{{ url ('/lupa-password') }}">Lupa password?</a>
											</small>
										</div>
										
										<div>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
												<span class="form-check-label">
												Ingat saya
												</span>
											</label>
										</div>
										<div class="text-center d-grid gap-2 mt-2 mb-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>	
@endsection
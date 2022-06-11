<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
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
									<form action="proses-sign-up" method="POST">
										@csrf
										<div class="mb-3">
											<label class="form-label">Nama Lengkap</label>
											<input class="form-control form-control-lg @error('nama_lengkap') is-invalid @enderror" type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" value="{{ old('nama_lengkap') }}" minlength="3" maxlength="50" required/>
											@error('nama_lengkap')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="Masukkan username" value="{{ old('username') }}" minlength="3" maxlength="50" required/>
											@error('username')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required/>
											@error('email')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror										</div>
										<div class="mb-3">
											<label class="form-label">Alamat</label>
											<input class="form-control form-control-lg @error('alamat') is-invalid @enderror" type="text" name="alamat" placeholder="Masukkan alamat" value="{{ old('alamat') }}" maxlength="100" required/>
											@error('alamat')
												<div class="invalid-feedback">
													{{ $message }}
												</div>
											@enderror											</div>
										<div class="mb-3">
											<label class="form-label">Role</label>
											<select class="form-select mb-3 @error('role') is-invalid @enderror" name="role" required>
												<option value="" disabled selected hidden>Pilih Role</option>
												<option value="distributor">Distributor</option>
												<option value="agen">Agen</option>
												<option value="reseller">Reseller</option>
												<option value="dropshipper">Dropshipper</option>
											</select>
											@error('role')
												<div class="invalid-feedback">
												{{ $message }}
											</div>
											@enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" minlength="8" maxlength="32" required/>
										</div>
										<div class="text-center d-grid gap-2 mt-2 mb-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign up</button>
										</div>
										<small>
											Sudah punya akun? <a href="{{ url ('/sign-in') }}">Sign in!</a>
										</small>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>
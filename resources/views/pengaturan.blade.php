@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-md-4 col-xl-3">
					<div class="card mb-3">
						<div class="card-header">
							<h5 class="card-title mb-0">Detil Profil</h5>
						</div>
						<div class="card-body text-center">
							<img src="img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
							<h5 class="card-title mb-0">Christina Mason</h5>
							<div class="text-muted mb-2">Distributor</div>
							<div class="text-muted mb-2">Reseller</div>
							<div class="text-muted mb-2">Dropshipper</div>
							<span data-feather="map-pin" class="feather-sm me-1"></span> Surabaya – 60286
						</div>
						<hr class="my-0" />
						<div class="card-body">
							<h5 class="h6 card-title">Tentang</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-1"><span data-feather="calendar" class="feather-sm me-1"></span> Bergabung Januari 2000</li>
								<li class="mb-1"><span data-feather="mail" class="feather-sm me-1"></span> sellerkit@gmail.com</li>
								<li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> +62 812-3456-7890</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8 col-xl-9">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-3">Edit Profil</h5>
							<form action="proses-sign-up" method="POST">
								@csrf
								<div class="mb-3">
									<label class="form-label">Nama Lengkap</label>
									<input class="form-control form-control-lg" type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" disabled/>
								</div>
								<div class="mb-3">
									<label class="form-label">Username</label>
									<input class="form-control form-control-lg" type="text" name="username" placeholder="Masukkan username" disabled/>
								</div>
								<div class="mb-3">
									<label class="form-label">Ubah Email</label>
									<input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" required/>
									@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror										
								</div>
								<div class="mb-3">
									<label class="form-label">Ubah Alamat</label>
									<input class="form-control form-control-lg @error('alamat') is-invalid @enderror" type="text" name="alamat" placeholder="Masukkan alamat" value="{{ old('alamat') }}" maxlength="100" required/>
									@error('alamat')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror											
								</div>
								<div class="mb-3">
									<label class="form-label">Role</label>
									<input class="form-control form-control-lg" type="text" name="role" placeholder="Pilih role" disabled/>
								</div>
								<div class="mb-3">
									<label class="form-label">Password</label>
									<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" minlength="8" maxlength="32" required/>
								</div>
								<div class="text-center d-grid gap-2 mt-2 mb-3">
									<button type="submit" class="btn btn-lg btn-primary">Edit</button>
								</div>
							</form>
						</div>
						<div class="card-body h-100"></div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
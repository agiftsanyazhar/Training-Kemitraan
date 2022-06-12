@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">
							<h5 class="card-title mb-0">{{ $title }}</h5>
						</div>
						<div class="m-sm-4">
							<form action="create-gudang" method="POST">
								@csrf
								<div class="mb-3">
									<label class="form-label">Nama Gudang</label>
									<input class="form-control form-control-lg @error('nama_gudang') is-invalid @enderror" type="text" name="nama_gudang" placeholder="Masukkan nama gudang" value="{{ old('nama_gudang') }}" required/>
									@error('nama_gudang')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="mb-3">
									<label class="form-label">Alamat</label>
									<input class="form-control form-control-lg @error('alamat') is-invalid @enderror" type="text" name="alamat_gudang" placeholder="Masukkan alamat" value="{{ old('alamat') }}" required/>
									@error('alamat')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="text-center d-grid gap-2 mt-2 mb-3">
									<button type="submit" class="btn btn-lg btn-primary">Tambah</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
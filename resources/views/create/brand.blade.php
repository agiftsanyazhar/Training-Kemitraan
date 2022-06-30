@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">
							<h5 class="card-title mb-0"><i data-feather="info"></i> Informasi {{ $title }}</h5>
						</div>
						<div class="m-sm-4">
							<form action="create-brand" method="POST">
								@csrf
								<div class="mb-3">
									<label class="form-label">Nama Brand</label>
									<input class="form-control form-control-lg @error('nama_brand') is-invalid @enderror" type="text" name="nama_brand" placeholder="Masukkan nama brand" value="{{ old('nama_brand') }}" required/>
									@error('nama_brand')
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
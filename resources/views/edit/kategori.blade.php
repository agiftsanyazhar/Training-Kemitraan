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
							<form action="update-kategori-{{ $data->id }}" method="POST">
								@method('put')
								@csrf
								<div class="mb-3">
									<label class="form-label">Nama Kategori</label>
									<input class="form-control form-control-lg @error('nama_kategori') is-invalid @enderror" type="text" name="nama_kategori" placeholder="Masukkan nama kategori" value="{{ old('nama_kategori',$data->nama_kategori) }}" required/>
									@error('nama_kategori')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
								<div class="text-center d-grid gap-2 mt-2 mb-3">
									<button type="submit" class="btn btn-lg btn-primary">Simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
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
							<form action="create-brand" method="POST">
								@csrf
								<div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Gambar Hadiah</label>
                                        <input class="form-control form-control-lg @error('gambar_hadiah') is-invalid @enderror" type="file" name="gambar_hadiah" value="{{ old('gambar_hadiah') }}" required />
                                        @error('gambar_hadiah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nama Hadiah</label>
                                        <input class="form-control form-control-lg @error('nama_hadiah') is-invalid @enderror" type="text" name="nama_hadiah" placeholder="Masukkan nama hadiah" value="{{ old('nama_hadiah') }}" required/>
                                        @error('nama_hadiah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
								</div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Harga Hadiah</label>
                                        <input class="form-control form-control-lg @error('harga_hadiah') is-invalid @enderror" type="number" name="harga_hadiah" placeholder="Masukkan harga hadiah" value="{{ old('harga_hadiah') }}" required/>
                                        @error('harga_hadiah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Harga Jual Hadiah</label>
                                        <input class="form-control form-control-lg @error('harga_jual_hadiah') is-invalid @enderror" type="number" name="harga_jual_hadiah" placeholder="Masukkan harga jual hadiah" value="{{ old('harga_jual_hadiah') }}" required/>
                                        @error('harga_jual_hadiah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
								<div class="mb-3">
									<label class="form-label">Deskripsi</label>
									<textarea class="form-control form-control-lg @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" rows="6" value="{{ old('deskripsi') }}" required></textarea>
									@error('deskripsi')
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
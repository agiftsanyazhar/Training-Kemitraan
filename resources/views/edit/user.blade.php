@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
            <div>
                <h3>{{ $title }}</h3>
            </div>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="m-sm-4">
                            <form action="/update-user-{{ $user->id }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input class="form-control form-control-lg @error('nama_lengkap') is-invalid @enderror" type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap" value="{{ old('nama_lengkap', $user->nama_lengkap) }}" minlength="3" maxlength="50" required/>
                                    @error('nama_lengkap')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="Masukkan username" value="{{ old('username', $user->username) }}" minlength="3" maxlength="50" required/>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Masukkan email" value="{{ old('email', $user->email) }}" required/>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror										
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input class="form-control form-control-lg @error('alamat') is-invalid @enderror" type="text" name="alamat" placeholder="Masukkan alamat" value="{{ old('alamat', $user->alamat) }}" maxlength="100" required/>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror											
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Role</label>
                                    <input name="id_role" type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $roleid }}" hidden>
                                    <input class="form-control" type="text" value="{{ $role }}" aria-label="Disabled input example" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" aria-label="Default select example" name="status" required>
                                        @if (old('status', $user->status) == "1")
                                        <option value="1" selected>Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                        @else
                                        <option value="1">Aktif</option>
                                        <option value="0" selected>Tidak Aktif</option>  
                                        @endif
                                        
                                    </select>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
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
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
							<form action="create-role" method="POST">
								@csrf
								<div class="mb-3">
									<label class="form-label">Nama Role</label>
                                    
									<input class="form-control form-control-lg @error('Role') is-invalid @enderror" type="text" name="Role" placeholder="Masukkan nama role" value="{{ old('Role') }}" required/>
									@error('Role')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror

                                    
								</div>
                                <div class="mb-3">
                                    <label class="form-label">Level Role</label>
									<select class="form-select mb-3" name="level" required>
										<option value="" disabled selected hidden>Pilih level role</option>
                                        @for($i=0;$i<=$role;$i++)
											{
												<option value="{{ $i+1 }}">Level {{ $i+1 }}</option>
											}
                                        @endfor
									  </select>
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
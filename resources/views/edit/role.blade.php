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
							<form action="update-role-{{ $data->id }}" method="POST">
								@method('put')
								@csrf
								<div class="mb-3">
									<label class="form-label">Nama Role</label>      
									<input class="form-control form-control-lg @error('Role') is-invalid @enderror" type="text" name="Role" placeholder="Masukkan Nama Role" value="{{ old('Role',$data->Role) }}" required/>
									@error('Role')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
                                <div class="mb-3">
                                    <label class="form-label">Level Role</label>
									<select name="level" class="form-control form-control-lg" id="" required>
                                        <option value="" disabled selected hidden>Pilih Level Role</option>
                                        @for($i=1;$i<=$role;$i++)
                                        {
											@if ($data->level == $i)
												<option value="{{ $i }}" selected>Level {{ $i }}</option>
											@else
												<option value="{{ $i }}">Level {{ $i }}</option>
											@endif
                                            
                                        }
                                        @endfor
                                    </select>
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
@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successHadiah'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('successHadiah') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('updateHadiah'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('updateHadiah') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('deleteHadiah'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('deleteHadiah') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			<div class="d-flex align-items-center justify-content-between mb-3">
				<h3>{{ $title }}</h3>
				<a href="{{ url ('/form-create-gudang') }}" class="btn btn-light"><i class="align-middle" data-feather="plus"></i> Tambah {{ $title }}</a>
			</div>
			<div class="row">
				<div class="col-12 col-lg-12 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th>No</th>
									<th class="d-none d-xl-table-cell">Nama Hadiah</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td class="d-none d-xl-table-cell">Sabun</td>
									<td class="d-none d-xl-table-cell">Sabun</td>
									<td>
										<div class="d-inline">
											<a href="{{ url ('/form-edit-hadiah-') }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
											<form action="{{ url('/delete-hadiah-') }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
												@method('delete')
												@csrf
												<button type="submit" class="button-solid btn-link text-danger no-padding"><i class="align-middle" data-feather="trash"></i></button>
											</form>
										</div>
									</td>
								</tr>
							</tbody>
							{{-- <tbody>
								@foreach($gudang as $data)
								<tr>
									<td>{{ $counter++ }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->nama_gudang }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->lokasi_gudang }}</td>
									<td>
										<div class="d-inline">
											<a href="{{ url ('/form-edit-gudang-') }}{{ $data->id }}" class="text-dark"><i data-feather="edit"></i></a>
											<form action="{{ url('/delete-gudang-') }}{{ $data->id }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
												@method('delete')
												@csrf
												<button type="submit" class="button-solid btn-link text-danger no-padding"><i data-feather="trash"></i></button>
											</form>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody> --}}
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
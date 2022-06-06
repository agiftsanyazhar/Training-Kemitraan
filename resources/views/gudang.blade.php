@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successGudang'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successGudang') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			@if (session()->has('updateGudang'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updateGudang') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			@if (session()->has('deletesGudang'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deletesGudang') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			<div class="d-flex align-items-center justify-content-between mb-3">
				<h3>{{ $title }}</h3>
				<a href="{{ url ('/form-create-gudang') }}" class="btn btn-light"><i class="align-middle" data-feather="plus"></i> Tambah {{ $title }}</a>
			</div>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th>No</th>
									<th class="d-none d-xl-table-cell">Nama Gudang</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($gudang as $data)
								<tr>
									<td>{{ $data->id }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->nama_gudang }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->lokasi_gudang }}</td>
									<td>
										<div class="d-inline">
											<a href="{{ url ('/form-edit-gudang-') }}" class="text-dark"><i data-feather="edit"></i></a>
											<form action="{{ url('/delete-gudang-') }}{{ $data->id }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
												@method('delete')
												@csrf
												<button type="submit" class="button-solid btn-link text-danger no-padding"><i data-feather="trash"></i></button>
											</form>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
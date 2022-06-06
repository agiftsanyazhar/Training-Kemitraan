@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successUser'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successUser') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			@if (session()->has('updateUser'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updateUser') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			@if (session()->has('deletesUser'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deletesUser') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

			<div class="d-flex align-items-center justify-content-between mb-3">
				<h3>{{ $title }}</h3>
				<a href="{{ url ('/form-create-user') }}" class="btn btn-light"><i class="align-middle" data-feather="plus"></i> Tambah {{ $title }}</a>
			</div>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th>No</th>
									<th class="d-none d-xl-table-cell">Nama Lengkap</th>
									<th class="d-none d-xl-table-cell">Username</th>
									<th class="d-none d-xl-table-cell">Tanggal Bergabung</th>
									<th class="d-none d-xl-table-cell">Email</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th class="d-none d-xl-table-cell">Role/Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($user as $data)
								<tr>
									<td>{{ $counter++ }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->nama_lengkap }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->username }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->join_date->format('d/m/Y') }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->email }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->alamat }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->role->Role }} <span class="badge bg-{{ ($data->status === 1) ? 'success' : 'danger' }}">{{ ($data->status === 1) ? 'Aktif' : 'Tidak Aktif' }}</span></td>
									<td>
										<div class="d-inline">
											<a href="{{ url ('/form-edit-user-') }}" class="text-dark"><i data-feather="edit"></i></a>
											<form action="{{ url('/delete-user-') }}{{ $data->id }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
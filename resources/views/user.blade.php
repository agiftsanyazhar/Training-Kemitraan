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

			<a href="{{ url ('/form-create-user') }}"><button type="button" class="btn btn-success mb-3"><i class="align-middle" data-feather="plus"></i> Tambah</button></a>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">

							<h5 class="card-title mb-0">{{ $title }}</h5>
						</div>
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th>No</th>
									<th class="d-none d-xl-table-cell">Nama Lengkap</th>
									<th class="d-none d-xl-table-cell">Username</th>
									<th class="d-none d-xl-table-cell">Tanggal Bergabung</th>
									<th class="d-none d-xl-table-cell">Email</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th class="d-none d-xl-table-cell">Status</th>
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
										<a href="{{ url ('/') }}"><button type="button" class="btn btn-info "><i class="align-middle" data-feather="eye"></i></button></a>
										<a href="{{ url ('/form-edit-daftar-user-') }}"><button type="button" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></button></a>
										<a href="{{ url ('/delete-daftar-user-') }}"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="align-middle" data-feather="trash"></i></button></a>
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
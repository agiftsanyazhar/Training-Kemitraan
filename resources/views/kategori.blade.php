@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successKategori'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successKategori') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			@if (session()->has('updateKategori'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updateKategori') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
			@if (session()->has('deletesKategori'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deletesKategori') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

			<a href="{{ url ('/create-kategori') }}"><button type="button" class="btn btn-success mb-3"><i class="align-middle" data-feather="plus"></i> Tambah</button></a>
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
									<th class="d-none d-xl-table-cell">Nama Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td class="d-none d-xl-table-cell">Face Wash</td>
									<td>
										<a href="{{ url ('/') }}"><button type="button" class="btn btn-info "><i class="align-middle" data-feather="eye"></i></button></a>
										<a href="{{ url ('/form-edit-kategori-') }}"><button type="button" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></button></a>
										<a href="{{ url ('/delete-kategori-') }}"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="align-middle" data-feather="trash"></i></button></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
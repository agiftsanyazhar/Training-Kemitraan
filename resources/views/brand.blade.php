@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successBrand'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('successBrand') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('updateBrand'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('updateBrand') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('deleteBrand'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('deleteBrand') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			<div class="d-flex align-items-center justify-content-between mb-3">
				<h3>{{ $title }}</h3>
				<a href="{{ url ('/form-create-brand') }}" class="btn btn-light"><i class="align-middle" data-feather="plus"></i> Tambah {{ $title }}</a>
			</div>
			<div class="row">
				<div class="col-12 col-lg-12 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<div class="row gy-3">
								<div class="col-12 col-md-11">
									<div class="input-group">
										<div class="input-group-append">
											<select name="search" id="search" class="form-select">
												<option value="">Nama Brand</option>
											</select>
										</div>
										<input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
									</div>
								</div>
								<div class="col-12 col-md-1">
									<button type="submit" class="btn btn-secondary">Cari</button>
								</div>
								<div class="col-12">
									<span class="mr-3">Nama Brand:
										<a href="" class="btn btn-secondary btn-sm">K8721&nbsp;&nbsp;<i class="align-middle" data-feather="x-circle"></i></a>
										<a href="" class="btn btn-light btn-sm">Reset&nbsp;&nbsp;<i class="align-middle" data-feather="refresh-cw"></i></a>
									</span>
								</div>
							</div>
						</div>
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th>No</th>
									<th class="d-none d-xl-table-cell">Nama Brand</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($brand as $data)
								<tr>
									<td>{{ $counter++ }}</td>
									<td class="d-none d-xl-table-cell">{{ $data->nama_brand }}</td>
									<td>
										<div class="d-inline">
											<a href="{{ url ('/form-edit-brand-') }}{{ $data->id }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
											<form action="{{ url('/delete-brand-') }}{{ $data->id }}" method="POST" class="d-inline" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
												@method('delete')
												@csrf
												<button type="submit" class="button-solid btn-link text-danger no-padding"><i class="align-middle" data-feather="trash"></i></button>
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
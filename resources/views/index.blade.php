@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successSignin'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('successSignin') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif

			<h1 class="h3 mb-3"><strong>Analisis</strong> Dashboard</h1>

			<div class="row">
				<div class="col-xl-6 col-xxl-5 d-flex">
					<div class="w-100">
						<div class="row">
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Penjualan</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="truck"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3">2.382</h1>
										<div class="mb-0">
											<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
											<span class="text-muted">dari 7 hari lalu</span>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Pengunjung</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="users"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3">14.212</h1>
										<div class="mb-0">
											<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
											<span class="text-muted">dari 7 hari lalu</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Pendapatan</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<div class="align-middle">Rp</div>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3">Rp21.300</h1>
										<div class="mb-0">
											<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
											<span class="text-muted">dari 7 hari lalu</span>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col mt-0">
												<h5 class="card-title">Pesanan</h5>
											</div>

											<div class="col-auto">
												<div class="stat text-primary">
													<i class="align-middle" data-feather="shopping-cart"></i>
												</div>
											</div>
										</div>
										<h1 class="mt-1 mb-3">64</h1>
										<div class="mb-0">
											<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
											<span class="text-muted">dari 7 hari lalu</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-6 col-xxl-7">
					<div class="card flex-fill w-100">
						<div class="card-header">

							<h5 class="card-title mb-0">Grafik Penjualan</h5>
						</div>
						<div class="card-body py-3">
							<div class="chart chart-sm">
								<canvas id="chartjs-dashboard-line"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>

			

			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">

							<h5 class="card-title mb-3">Top Product</h5>

							<div class="row">
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<img src="img/avatars/avatar.jpg" width="220" />
											<h4 class="mt-1 mb-0">Sabun</h4>
											<div class="mb-0">
												<span class="text-muted">Rp50.000</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">

							<h5 class="card-title mb-0">{{ $title }}</h5>
						</div>
						<div class="card-body">
							<div class="row gy-3">
								<div class="col-12 col-md-7">
									<div class="input-group">
										<div class="input-group-append">
											<select name="search" id="search" class="form-select">
												<option value="">Nama Lengkap</option>
												<option value="">Username</option>
												<option value="">Tanggal Bergabung</option>
												<option value="">Email</option>
												<option value="">Alamat</option>
											</select>
										</div>
										<input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="input-group">
										<div class="input-group-append">
											<select name="search" id="search" class="form-select">
												<option value="">Semua Role</option>
												<option value="">Test</option>
												<option value="">Test</option>
												<option value="">Test</option>
											</select>
										</div>
										<input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
									</div>
								</div>
								<div class="col-12 col-md-1">
									<button type="submit" class="btn btn-secondary">Cari</button>
								</div>
								<div class="col-12">
									<span class="mr-3">Nama Lengkap:
										<a href="" class="btn btn-secondary btn-sm">Apollo 1&nbsp;&nbsp;<i class="align-middle" data-feather="x-circle"></i></a>
										<a href="" class="btn btn-light btn-sm">Reset&nbsp;&nbsp;<i class="align-middle" data-feather="refresh-cw"></i></a>
									</span>
								</div>
							</div>
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
									<th class="d-none d-xl-table-cell">Role/Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td class="d-none d-xl-table-cell">Apollo 1</td>
									<td class="d-none d-xl-table-cell">apollo1</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">apollo1@gmail.com</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Distributor <span class="badge bg-success">Aktif</span></td>
									<td>
										<a href="{{ url ('/') }}" class="text-info"><i class="align-middle" data-feather="eye"></i></a>
										<a href="{{ url ('/form-edit-mitra-') }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
										<form action="{{ url ('/delete-mitra-') }}{" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
											@method('delete')
											@csrf
											<button type="submit" class="button-solid btn-link text-danger no-padding"><i class="align-middle" data-feather="trash"></i></button>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">

							<h5 class="card-title mb-0">Daftar Barang</h5>
						</div>
						<div class="card-body">
							<div class="row gy-3">
								<div class="col-12 col-md-11">
									<div class="input-group">
										<div class="input-group-append">
											<select name="search" id="search" class="form-select">
												<option value="">ID</option>
												<option value="">Nama Barang</option>
												<option value="">Stok</option>
												<option value="">Kategori</option>
											</select>
										</div>
										<input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
									</div>
								</div>
								<div class="col-12 col-md-1">
									<button type="submit" class="btn btn-secondary">Cari</button>
								</div>
								<div class="col-12">
									<span class="mr-3">ID:
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
									<th class="d-none d-xl-table-cell">ID</th>
									<th class="d-none d-xl-table-cell">Nama Barang</th>
									<th class="d-none d-xl-table-cell">Harga</th>
									<th class="d-none d-xl-table-cell">Stok</th>
									<th class="d-none d-xl-table-cell">Kategori</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td class="d-none d-xl-table-cell">K8721</td>
									<td class="d-none d-xl-table-cell">Garnier Men</td>
									<td class="d-none d-xl-table-cell">Rp50.000</td>
									<td class="d-none d-xl-table-cell">49</td>
									<td class="d-none d-xl-table-cell">Face Wash</td>
									<td>
										<a href="{{ url ('/') }}" class="text-info"><i class="align-middle" data-feather="eye"></i></a>
										<a href="{{ url ('/form-edit-barang-') }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
										<form action="{{ url ('/delete-barang-') }}{" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
											@method('delete')
											@csrf
											<button type="submit" class="button-solid btn-link text-danger no-padding"><i class="align-middle" data-feather="trash"></i></button>
										</form>
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
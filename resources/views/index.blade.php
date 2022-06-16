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
									<select name="search" id="search" class="form-select">
										<option value="">Semua Role</option>
										<option value="">Test</option>
										<option value="">Test</option>
										<option value="">Test</option>
									</select>
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
						<div class="card-body">
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade active show" id="pills-all-orders" role="tabpanel" aria-labelledby="pills-all-orders-tab">
									<div class="table-responsive">
										<table class="table bg-white table-found" id="orders_table">
											<thead>
												<tr>
													<th class="border-right">
														<div class="d-flex">No</div>
													</th>
													<th>Nama Lengkap</th>
													<th>Username</th>
													<th>Tanggal Bergabung</th>
													<th>Email</th>
													<th>Alamat</th>
													<th>Role/Status</th>
													<th class="border-left">
														<div class="d-flex">Aksi</div>
													</th>
												</tr>
											</thead>
											<tbody id="order_items" style="border-top: 0px">
												<tr>
													<td class="align-top border-right">
														<div class="d-flex">
															1
														</div>
													</td>
													<td class="align-top">
														Apollo 1
													</td>
													<td class="align-top">
														apollo1
													</td>
													<td class="align-top">
														01/01/2021
													</td>
													<td class="align-top">
														apollo1@gmail.com
													</td>
													<td class="align-top">
														Surabaya
													</td>
													<td class="align-top">
														Distributor <span class="badge bg-success">Aktif</span>
													</td>
													<td class="align-top border-left">
														<div class="d-flex">
															<div class="d-inline">
																<a href="{{ url ('/') }}" class="text-info"><i class="align-middle" data-feather="eye"></i></a>
																<a href="{{ url ('/form-edit-hadiah-') }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
																<form action="{{ url('/delete-hadiah-') }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
																	@method('delete')
																	@csrf
																	<button type="submit" class="button-solid btn-link text-danger no-padding"><i class="align-middle" data-feather="trash"></i></button>
																</form>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
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
						<div class="card-body">
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade active show" id="pills-all-orders" role="tabpanel" aria-labelledby="pills-all-orders-tab">
									<div class="table-responsive">
										<table class="table bg-white table-found" id="orders_table">
											<thead>
												<tr>
													<th class="border-right">
														<div class="d-flex">No</div>
													</th>
													<th>ID</th>
													<th>Nama Barang</th>
													<th>Harga</th>
													<th>Stok</th>
													<th>Kategori</th>
													<th class="border-left">
														<div class="d-flex">Aksi</div>
													</th>
												</tr>
											</thead>
											<tbody id="order_items" style="border-top: 0px">
												<tr>
													<td class="align-top border-right">
														<div class="d-flex">
															1
														</div>
													</td>
													<td class="align-top">
														K8721
													</td>
													<td class="align-top">
														Garnier Men
													</td>
													<td class="align-top">
														Rp50.000
													</td>
													<td class="align-top">
														49
													</td>
													<td class="align-top">
														Face Wash
													</td>
													<td class="align-top border-left">
														<div class="d-flex">
															<div class="d-inline">
																<a href="{{ url ('/') }}" class="text-info"><i class="align-middle" data-feather="eye"></i></a>
																<a href="{{ url ('/form-edit-hadiah-') }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
																<form action="{{ url('/delete-hadiah-') }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
																	@method('delete')
																	@csrf
																	<button type="submit" class="button-solid btn-link text-danger no-padding"><i class="align-middle" data-feather="trash"></i></button>
																</form>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
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
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="card">
										<div class="card-body">
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
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
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="row gx-2 gy-3">
								<div class="col-12 col-md-11">
									<input type="search" name="product_name" id="product_name" placeholder="Cari berdasarkan nama" class="form-control">
								</div>
								<div class="col-12 col-md-1">
									<button type="submit" class="btn btn-secondary">Cari</button>
								</div>
			
								<div class="col-12">
									<?php
									if (!empty($history)) {
										foreach ($history as $f) {
											$url = getUrlCurrently(base_url('gift'), $_GET, $f['get']);
			
											echo '<span class="mr-3">
													' . $f['filter'] . ': 
													<span class="badge bg-secondary">' . $f['keyword'] . ($f['get'] != 'sort_by' ? '&nbsp;&nbsp;<a href="' . $url . '" class="text-light"><i class="fa fa-times-circle"></a>' : '') . '</i></span>
												</span>';
										}
										echo '<a href="' . base_url('gift') . '" class="btn btn-light btn-sm"><i class="fa fa-refresh"></i> Reset</a>';
									}
									?>
								</div>
			
							</div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-found">
									<thead>
										<tr>
											<th class="pb-0" width="30%">
												<div class="d-flex">
													<div class="p-2">
														<input class="form-check-input" type="checkbox" value="" id="checkAll">
													</div>
													<div class="p-2">
														Produk
													</div>
												</div>
											</th>
											<th>Harga</th>
											<th>Deskripsi</th>
											<th>Atur</th>
										</tr>
									</thead>
									<tbody style="border-top: 0px">
			
											<div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-header" style="border-bottom: 0px">
															<!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body text-center">
															<i class="text-warning fa fa-warning fa-10x mb-3"></i>
															<div class="mb-4">
																<h2>Apakah anda yakin?</h2>
																<p class="text-muted">Data transaksi terkait produk ini tidak akan ikut terhapus.</p>
															</div>
															<button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
															<a href="<?= base_url('gift/delete/' . $s['gift_id']) ?>" role="button" class="btn btn-danger">Hapus</a>
														</div>
			
			
													</div>
												</div>
											</div>
			
											<tr>
												<td class="align-top">
													<div class="d-flex">
														<div class="p-2 pt-0 align-self-center">
															<input class="form-check-input" type="checkbox" value="">
														</div>
														<div class="p-2 pt-0">
															<?= $s['gift_pic'] ? '<img src="' . base_url('assets/img/gift/' . $s['gift_pic']) . '" class="img-thumbnail" width="60px">' : '<i class="fa fa-image fa-3x"></i>' ?>
														</div>
														<div class="p-2 pt-0">
															<span><?= $s['gift_name'] ?></span>
														</div>
													</div>
												</td>
			
												<td class="align-top">
													<p class="mb-1"><span class="badge bg-success">HPP</span> <?= rupiah($s['gift_price']) ?></p>
													<p><span class="badge bg-primary">HET</span> <?= rupiah($s['gift_sale_price']) ?></p>
												</td>
			
												<td class="align-top">
													<div class="d-flex">
														<div class="p-2 pt-0">
															<!-- <button class="copy-text" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
																Copy to clipboard
															</button> -->
															<a tabindex="0" role="button" id="copy" class="text-dark" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="Copied!" data-clipboard-text="<?= $s['gift_desc'] ?>">
																<i class="fa fa-copy"></i>
															</a>
														</div>
														<div class="p-2 flex-grow-1 pt-0 gradient-text">
															<span><?= $s['gift_desc'] ?></span>
														</div>
													</div>
												</td>
			
												<!-- <td class="align-top"><span class="badge <?= $s['gift_status'] == 'aktif' ? 'bg-success' : 'bg-danger' ?>"><?= $s['gift_status'] ?></span></td> -->
												<?php if ($permission['role_permission_category'] == 'editor') { ?>
													<td class="table-action align-top">
														<a href="<?= base_url('gift/edit/' . $s['gift_id']) ?>" class="text-dark"><i data-feather="edit"></i></a>
														<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ModalDelete<?= $s['gift_id'] ?>" class="text-danger"><i data-feather="trash"></i></a>
													</td>
											</tr>
									</tbody>
								</table>
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
										<a href="{{ url ('/') }}" class="text-info"><i data-feather="eye"></i></a>
										<a href="{{ url ('/form-edit-mitra-') }}" class="text-dark"><i data-feather="edit"></i></a>
										<form action="{{ url ('/delete-mitra-') }}{" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
											@method('delete')
											@csrf
											<button type="submit" class="button-solid btn-link text-danger no-padding"><i data-feather="trash"></i></button>
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
										<a href="{{ url ('/') }}" class="text-info"><i data-feather="eye"></i></a>
										<a href="{{ url ('/form-edit-barang-') }}" class="text-dark"><i data-feather="edit"></i></a>
										<form action="{{ url ('/delete-barang-') }}{" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
											@method('delete')
											@csrf
											<button type="submit" class="button-solid btn-link text-danger no-padding"><i data-feather="trash"></i></button>
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
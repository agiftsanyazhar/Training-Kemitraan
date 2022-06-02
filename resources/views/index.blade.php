@extends('layouts.layout_dashboard')

@section('container')
<div class="container-fluid p-0">

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
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col mt-0">
													<span class="badge bg-success">1</span>
												</div>
											</div>
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col mt-0">
													<span class="badge bg-success">2</span>
												</div>
											</div>
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col-auto">
													<span class="badge bg-success">3</span>
												</div>
											</div>
											<h1 class="mt-1 mb-3">Gambar</h1>
											<span class="text-muted">Nama Barang</span>
											<div class="mb-0">
												<h3 class="mt-1 mb-3">Rpxx.xxx</h1>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="btn-group me-2" role="group" aria-label="First group">
								<button type="button" class="btn btn-secondary">1</button>
								<button type="button" class="btn btn-secondary">2</button>
								<button type="button" class="btn btn-secondary">3</button>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
						<div class="card-header">

							<h5 class="card-title mb-0">Daftar Mitra</h5>
						</div>
						<table class="table table-hover my-0">
							<thead>
								<tr>
									<th>Nama Mitra</th>
									<th class="d-none d-xl-table-cell">Tanggal Bergabung</th>
									<th class="d-none d-xl-table-cell">Alamat</th>
									<th class="d-none d-xl-table-cell">Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Project Apollo</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Distributor</td>
									<td><button type="button" class="btn btn-success">Detil</button></td>
								</tr>
								<tr>
									<td>Project Apollo</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Reseller</td>
									<td><button type="button" class="btn btn-success">Detil</button></td>
								</tr>
								<tr>
									<td>Project Apollo</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Dropshipper</td>
									<td><button type="button" class="btn btn-success">Detil</button></td>
								</tr>
								<tr>
									<td>Project Apollo</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Distributor</td>
									<td><button type="button" class="btn btn-success">Detil</button></td>
								</tr>
								<tr>
									<td>Project Apollo</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Reseller</td>
									<td><button type="button" class="btn btn-success">Detil</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<table class="table table-hover my-0">
					<thead>
						<tr>
							<th>Nama Barang</th>
							<th class="d-none d-xl-table-cell">harga</th>
							<th class="d-none d-xl-table-cell">Stok</th>
							<th>Kategori</th>
						</tr>
					</thead>
					<tbody>
						@foreach($barang as $data)
						<tr>
							<td>{{ $data->nama_barang }}</td>
							<td class="d-none d-xl-table-cell">{{ $data->harga_barang }}</td>
							<td class="d-none d-xl-table-cell">{{ $data->stok_barang }}</td>
							<td><span class="badge bg-success">{{ $data->kategori_barang->nama_kategori }}</span></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
	</div>

</div>			
@endsection
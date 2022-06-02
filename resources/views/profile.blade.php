@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">

			
			<div class="row">
				<div class="col-md-4 col-xl-3">
					<div class="card mb-3">
						<div class="card-header">
							<h5 class="card-title mb-0">Detil Profil</h5>
						</div>
						<div class="card-body text-center">
							<img src="img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128" />
							<h5 class="card-title mb-0">Christina Mason</h5>
							<div class="text-muted mb-2">Distributor</div>
							<div class="text-muted mb-2">Reseller</div>
							<div class="text-muted mb-2">Dropshiper</div>
							<span data-feather="map-pin" class="feather-sm me-1"></span> Surabaya – 60286

							
						</div>
						
						<hr class="my-0" />
						<div class="card-body">
							<h5 class="h6 card-title">Tentang</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-1"><span data-feather="calendar" class="feather-sm me-1"></span> Bergabung Januari 2000</li>
								<li class="mb-1"><span data-feather="mail" class="feather-sm me-1"></span> sellerkit@gmail.com</li>
								<li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> +62 812-3456-7890</li>
							</ul>
						</div>
						
					</div>
				</div>

				<div class="col-md-8 col-xl-9">
					<div class="card">
						<div class="card-header">

							<h5 class="card-title mb-3">Aktivitas</h5>

							<div class="row">
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col mt-0">
													<h5 class="card-title">Invoice <span class="badge bg-success">Bulan ini</span></h5>
												</div>
	
												<div class="col-auto">
													<div class="stat text-primary">
														<div class="align-middle">Rp</div>
													</div>
												</div>
											</div>
											<h1 class="mt-1 mb-3">8</h1>
											<div class="mb-4">
												<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
												<span class="text-muted">dari 7 hari lalu</span>
											</div>
											<h1 class="mt-1 mb-3">Rp149.000</h1>
											<div class="mb-0">
												<span class="text-muted">Potensi</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col mt-0">
													<h5 class="card-title">Pcs <span class="badge bg-success">Bulan ini</span></h5>
												</div>
	
												<div class="col-auto">
													<div class="stat text-primary">
														<div class="align-middle">PCS</div>
													</div>
												</div>
											</div>
											<h1 class="mt-1 mb-3">428</h1>
											<div class="mb-4">
												<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
												<span class="text-muted">dari 7 hari lalu</span>
											</div>
											<h1 class="mt-1 mb-3">Rp149.000</h1>
											<div class="mb-0">
												<span class="text-muted">Potensi</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="card">
										<div class="card-body">
											<div class="row">
												<div class="col mt-0">
													<h5 class="card-title">Nominal <span class="badge bg-success">Bulan ini</span></h5>
												</div>
	
												<div class="col-auto">
													<div class="stat text-primary">
														<div class="align-middle">Rp</div>
													</div>
												</div>
											</div>
											<h1 class="mt-1 mb-3">Rp320.000</h1>
											<div class="mb-4">
												<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
												<span class="text-muted">dari 7 hari lalu</span>
											</div>
											<h1 class="mt-1 mb-3">Rp149.000</h1>
											<div class="mb-0">
												<span class="text-muted">Potensi</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body h-100">
							
						</div>
					</div>
					<div class="card">
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
						<div class="card-body h-100">
							
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>
@endsection
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

							<h5 class="card-title mb-0">Aktivitas</h5>
						</div>
						<div class="card-body h-100">
							
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>
@endsection
@extends('layouts.index')

@section('container')
<main class="content">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12 col-lg-8 col-xxl-12 d-flex">
				<div class="card flex-fill">
					<div class="card-header">

						<h5 class="card-title mb-0">{{ $title }}</h5>

						
					</div>
					<table class="table table-hover my-0">
						<thead>
							<tr>
								<th>Username</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Tanggal Bergabung</th>
								<th>Alamat</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user as $users)
							<tr>
								<td>{{ $users->username }}</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
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
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
									<th>No.</th>
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
								<tr>
									<td>1</td>
									<td class="d-none d-xl-table-cell">Apollo 1</td>
									<td class="d-none d-xl-table-cell">apollo1</td>
									<td class="d-none d-xl-table-cell">01/01/2021</td>
									<td class="d-none d-xl-table-cell">apollo1@gmail.com</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Distributor <span class="badge bg-success">Aktif</span></td>
									<td>
										<button type="button" class="btn btn-info "><i class="align-middle" data-feather="eye"></i></button>
										<button type="button" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></button>
										<button type="button" class="btn btn-danger"><i class="align-middle" data-feather="trash"></i></button>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td class="d-none d-xl-table-cell">Apollo 2</td>
									<td class="d-none d-xl-table-cell">apollo2</td>
									<td class="d-none d-xl-table-cell">02/01/2021</td>
									<td class="d-none d-xl-table-cell">apollo2@gmail.com</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Reseller <span class="badge bg-warning">Pending</span></td>
									<td>
										<button type="button" class="btn btn-info "><i class="align-middle" data-feather="eye"></i></button>
										<button type="button" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></button>
										<button type="button" class="btn btn-danger"><i class="align-middle" data-feather="trash"></i></button>
									</td>
								</tr>
								<tr>
									<td>3</td>
									<td class="d-none d-xl-table-cell">Apollo 3</td>
									<td class="d-none d-xl-table-cell">apollo3</td>
									<td class="d-none d-xl-table-cell">03/01/2021</td>
									<td class="d-none d-xl-table-cell">apollo3@gmail.com</td>
									<td class="d-none d-xl-table-cell">Surabaya</td>
									<td class="d-none d-xl-table-cell">Dropshipper <span class="badge bg-danger">Nonaktif</span></td>
									<td>
										<button type="button" class="btn btn-info "><i class="align-middle" data-feather="eye"></i></button>
										<button type="button" class="btn btn-warning"><i class="align-middle" data-feather="edit"></i></button>
										<button type="button" class="btn btn-danger"><i class="align-middle" data-feather="trash"></i></button>
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
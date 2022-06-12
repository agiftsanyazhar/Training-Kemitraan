@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successUser'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('successUser') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('updateUser'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('updateUser') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('deleteUser'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('deleteUser') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			<div class="d-flex align-items-center justify-content-between mb-3">
				<h3>{{ $title }}</h3>
				<a href="{{ url ('/form-create-user') }}" class="btn btn-light"><i class="align-middle" data-feather="plus"></i> Tambah {{ $title }}</a>
			</div>
			<div class="row">
				<div class="col-12 col-lg-8 col-xxl-12 d-flex">
					<div class="card flex-fill">
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
												@foreach($user as $data)
												<tr>
													<td class="align-top border-right">
														<div class="d-flex">
															{{ $counter++ }}
														</div>
													</td>
													<td class="align-top">
														{{ $data->nama_lengkap }}
													</td>
													<td class="align-top">
														{{ $data->username }}
													</td>
													<td class="align-top">
														{{ $data->join_date->format('d/m/Y') }}
													</td>
													<td class="align-top">
														{{ $data->email }}
													</td>
													<td class="align-top">
														{{ $data->alamat }}
													</td>
													<td class="align-top">
														{{ $data->role->Role }} <span class="badge bg-{{ ($data->status === 1) ? 'success' : 'danger' }}">{{ ($data->status === 1) ? 'Aktif' : 'Tidak Aktif' }}</span>
													</td>
													<td class="align-top border-left">
														<div class="d-flex">
															<div class="d-inline">
																<a href="{{ url ('/form-edit-user-') }}{{ $data->id }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
																<form action="{{ url('/delete-user-') }}{{ $data->id }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
																	@method('delete')
																	@csrf
																	<button type="submit" class="button-solid btn-link text-danger no-padding"><i class="align-middle" data-feather="trash"></i></button>
																</form>
															</div>
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
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
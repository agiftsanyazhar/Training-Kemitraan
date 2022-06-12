@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successGudang'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('successGudang') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('updateGudang'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('updateGudang') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('deleteGudang'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('deleteGudang') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			<div class="d-flex align-items-center justify-content-between mb-3">
				<h3>{{ $title }}</h3>
				<a href="{{ url ('/form-create-gudang') }}" class="btn btn-light"><i class="align-middle" data-feather="plus"></i> Tambah {{ $title }}</a>
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
												<option value="">Nama Gudang</option>
												<option value="">Alamat</option>
											</select>
										</div>
										<input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
									</div>
								</div>
								<div class="col-12 col-md-1">
									<button type="submit" class="btn btn-secondary">Cari</button>
								</div>
								<div class="col-12">
									<span class="mr-3">Nama Gudang:
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
													<th>Nama Gudang</th>
													<th>Alamat</th>
													<th class="border-left">
														<div class="d-flex">Aksi</div>
													</th>
												</tr>
											</thead>
											<tbody id="order_items" style="border-top: 0px">
												@foreach($gudang as $data)
												<tr>
													<td class="align-top border-right">
														<div class="d-flex">
															{{ $counter++ }}
														</div>
													</td>
													<td class="align-top">
														{{ $data->nama_gudang }}
													</td>
													<td class="align-top">
														{{ $data->lokasi_gudang }}
													</td>
													<td class="align-top border-left">
														<div class="d-flex">
															<div class="d-inline">
																<a href="{{ url ('/form-edit-gudang-') }}{{ $data->id }}" class="text-dark"><i class="align-middle" data-feather="edit"></i></a>
																<form action="{{ url('/delete-gudang-') }}{{ $data->id }}" method="POST" class="text-danger d-inline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
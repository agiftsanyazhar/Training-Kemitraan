@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			@if (session()->has('successHadiah'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('successHadiah') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('updateHadiah'))
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('updateHadiah') }}
                    	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
                </div>
            @endif
			@if (session()->has('deleteHadiah'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<div class="alert-message">
                    	{{ session('deleteHadiah') }}
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
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade active show" id="pills-all-orders" role="tabpanel" aria-labelledby="pills-all-orders-tab">
									<div class="table-responsive">
										<table class="table bg-white table-found" id="orders_table">
											<thead>
												<tr>
													<th class="border-right">
														<div class="d-flex">
															No
														</div>
													</th>
													<th>Nama Produk</th>
													<th>Harga</th>
													<th>Deskripsi</th>
													<th class="border-left">
														<div class="d-flex">
															Aksi
														</div>
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
														<div class="d-flex">
															<div class="flex">
																<img class="me-2" src="img/avatars/avatar.jpg" width="75">
															</div>
															<div class="flex">
																<h4 class="mb-0 text-lg">Sabun</h4>
																<div class="mb-0">
																	<span class="text-muted">Stok: 49</span>
																</div>
															</div>
														</div>
													</td>
													<td class="align-top">
														<p class="mb-1"><span class="badge bg-success align-middle">HPP</span> Rp40.000</p>
														<p class="mb-1"><span class="badge bg-primary align-middle">HET</span> Rp50.000</p>
													</td>
													<td class="align-top text-wrap">
														{{ Str::of($post)->words(20, ''); }}
														@if (Str::of($post)->wordCount() > 20)
															<span id="dots">...</span>
															<span id="more">{{ Str::of($post)->after($after) }}</span>
														@endif
														<a href="#" onclick="myFunction()" id="myBtn">Selengkapnya</a>
													</td>
													<td class="align-top border-left">
														<div class="d-flex">
															<div class="d-inline">
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
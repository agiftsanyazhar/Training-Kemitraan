@extends('layouts.index')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h1 class="h3">Produk</h1>
                <a href="#staticBackdrop" data-bs-toggle="modal" class="btn btn-light"><i class="align-middle" data-feather="plus"></i>
                    Tambah Produk
                </a>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Jenis Produk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <a href="{{ url ('/form-create-produk-satuan') }}" class="btn btn-primary">Satuan</a>
                            <a href="{{ url ('/form-create-produk-paket') }}" class="btn btn-primary">Paket</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="https://dashboard.sellerkit.id/product" method="get" accept-charset="utf-8">

                                <div class="row gx-2 gy-3">
                                    <div class="col-12 col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <select name="search" id="search" class="form-select">
                                                    <option value="product_name">Nama produk</option>
                                                    <option value="product_sku">SKU produk</option>
                                                </select>
                                            </div>
                                            <input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <select name="platform" id="type" class="form-select">
                                            <option value="" selected="" disabled="" hidden="">Tipe produk</option>
                                            <option value="satuan">Satuan</option>
                                            <option value="paket">Paket</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <select name="brand" id="brand" class="form-select">
                                            <option value="" selected="" disabled="" hidden="">Brand</option>
                                            <option value="1">Royalty2</option>
                                            <option value="17">Test3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <select name="category" id="category" class="form-select">
                                            <option value="" selected="" disabled="" hidden="">Kategori</option>
                                            <option value="1">Skincare2</option>
                                            <option value="11">Test</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-1">
                                        <button type="submit" class="btn btn-secondary">Cari</button>
                                    </div>

                                    <div class="col-12">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="modal fade" id="ModalDelete21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border-bottom: 0px">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
                                                <div class="mb-4">
                                                    <h2>Apakah anda yakin?</h2>
                                                    <p class="text-muted">Data transaksi terkait produk ini tidak akan ikut terhapus.</p>
                                                </div>
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <a href="https://dashboard.sellerkit.id/product/delete/21" role="button" class="btn btn-danger">Hapus</a>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="ModalDelete24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border-bottom: 0px">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
                                                <div class="mb-4">
                                                    <h2>Apakah anda yakin?</h2>
                                                    <p class="text-muted">Data transaksi terkait produk ini tidak akan ikut terhapus.</p>
                                                </div>
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <a href="https://dashboard.sellerkit.id/product/delete/24" role="button" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="ModalDelete25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border-bottom: 0px">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
                                                <div class="mb-4">
                                                    <h2>Apakah anda yakin?</h2>
                                                    <p class="text-muted">Data transaksi terkait produk ini tidak akan ikut terhapus.</p>
                                                </div>
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <a href="https://dashboard.sellerkit.id/product/delete/25" role="button" class="btn btn-danger">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-found">
                                    <thead>
                                        <tr>
                                            <th class="pb-0 border-right">
                                                <div class="d-flex">
                                                    <div class="p-2">
                                                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                                    </div>
                                                    <div class="p-2">
                                                        Produk
                                                    </div>
                                                </div>
                                            </th>
                                            <th>Kategori</th>
                                            <th>Brand</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>SKU</th>
                                            <th class="border-left">Atur</th>
                                        </tr>
                                    </thead>
                                    <tbody style="border-top: 0px">
                                        <tr>
                                            <td class="align-top border-right text-wrap" style="min-width: 280px">
                                                <div class="d-flex">
                                                    <div class="p-2 py-0 flex-shrink-1 align-self-center">
                                                        <input class="form-check-input" type="checkbox" value="">
                                                    </div>
                                                    <div class="p-2 py-0 flex-shrink-0">
                                                        <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" class="img-thumbnail img-fluid avatar-lg" style="object-fit: contain">
                                                    </div>
                                                    <div class="p-2 py-0 flex-grow-1">
                                                        <span>Saboon</span>
                                                        <p><span class="badge bg-secondary">satuan</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-top">
                                                Skinny24
                                            </td>
                                            <td class="align-top">
                                                Royalty 2
                                            </td>
                                            <td class="align-top">
                                                <p class="mb-1"><span class="badge bg-primary">HET</span> Rp5.000</p>
                                                <p><span class="badge bg-success">HPP</span> Rp4.000</p>
                                            </td>

                                            <td class="align-top">
                                                <div class="d-flex" width="200px">
                                                    <div class="p-2 pt-0">
                                                        <button type="button" class="btn btn-light btn-sm" id="copy" data-bs-trigger="focus" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-clipboard-text="testetsetsttestetsetsttestetsetst" data-bs-original-title="Disalin!">
                                                            <i class="fa fa-copy" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="p-2 flex-grow-1 pt-0 gradient-text">
                                                        <span>testetsetsttestetsetsttestetsetst</span>
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="align-top"><b>GA-SHAMPOO</b></td>
                                            <td class="align-top border-left">
                                                <a href="https://dashboard.sellerkit.id/product/edit/21" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg></a>
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ModalDelete21" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $("#checkAll").click(function() {
                    $('input:checkbox').not(this).prop('checked', this.checked);
                });

                // Clipboard
                var clipboard = new ClipboardJS('#copy');

                // var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                // var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                //     return new bootstrap.Popover(popoverTriggerEl)
                // })

                // var popover = new bootstrap.Popover(document.querySelector('.popover-dismiss'), {
                //     trigger: 'focus'
                // })

                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })

                var tooltip = new bootstrap.Tooltip(document.querySelector('.tooltip-dismiss'), {
                    trigger: 'focus'
                })

                // var clipboard = new ClipboardJS('.copy-text');

                // var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                // var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                //     return new bootstrap.Tooltip(tooltipTriggerEl)
                // })

                // $('#copy').tooltip({
                //     trigger: 'click',
                //     placement: 'bottom'
                // });

                // function setTooltip(message) {
                //     $('#copy').tooltip('hide')
                //         .attr('data-original-title', message)
                //         .tooltip('show');
                // }

                // function hideTooltip() {
                //     setTimeout(function() {
                //         $('#copy').tooltip('hide');
                //     }, 1000);
                // }

                // clipboard.on('success', function(e) {
                //     setTooltip('Copied!');
                //     hideTooltip();

                // });

                // clipboard.on('error', function(e) {
                //     setTooltip('Failed!');
                //     hideTooltip();

                // });
            </script>
        </div>
    </main>
@endsection
@extends('layouts.layout_dashboard')

@section('container')


<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center justify-content-between mb-3">
<h1 class="h3">Produk</h1>
<a href="https://dashboard.sellerkit.id/product/add" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Tambah Produk</a>
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
                


A PHP Error was encountered

Severity: Warning
Message:  Undefined variable $c
Filename: product/product.php
Line Number: 38


Backtrace:







File: /home/u1678048/public_html/.dashboard/application/views/product/product.php
Line: 38
Function: _error_handler			









File: /home/u1678048/public_html/.dashboard/application/libraries/Templates.php
Line: 15
Function: view			





File: /home/u1678048/public_html/.dashboard/application/controllers/Product.php
Line: 95
Function: load			







File: /home/u1678048/public_html/.dashboard/index.php
Line: 315
Function: require_once			







A PHP Error was encountered

Severity: Warning
Message:  Trying to access array offset on value of type null
Filename: product/product.php
Line Number: 38


Backtrace:







File: /home/u1678048/public_html/.dashboard/application/views/product/product.php
Line: 38
Function: _error_handler			









File: /home/u1678048/public_html/.dashboard/application/libraries/Templates.php
Line: 15
Function: view			





File: /home/u1678048/public_html/.dashboard/application/controllers/Product.php
Line: 95
Function: load			







File: /home/u1678048/public_html/.dashboard/index.php
Line: 315
Function: require_once			




<option value="1">Royalty2</option>


A PHP Error was encountered

Severity: Warning
Message:  Undefined variable $c
Filename: product/product.php
Line Number: 38


Backtrace:







File: /home/u1678048/public_html/.dashboard/application/views/product/product.php
Line: 38
Function: _error_handler			









File: /home/u1678048/public_html/.dashboard/application/libraries/Templates.php
Line: 15
Function: view			





File: /home/u1678048/public_html/.dashboard/application/controllers/Product.php
Line: 95
Function: load			







File: /home/u1678048/public_html/.dashboard/index.php
Line: 315
Function: require_once			







A PHP Error was encountered

Severity: Warning
Message:  Trying to access array offset on value of type null
Filename: product/product.php
Line Number: 38


Backtrace:







File: /home/u1678048/public_html/.dashboard/application/views/product/product.php
Line: 38
Function: _error_handler			









File: /home/u1678048/public_html/.dashboard/application/libraries/Templates.php
Line: 15
Function: view			





File: /home/u1678048/public_html/.dashboard/application/controllers/Product.php
Line: 95
Function: load			







File: /home/u1678048/public_html/.dashboard/index.php
Line: 315
Function: require_once			




<option value="17">Test3</option>                        </select>
        </div>
        <div class="col-12 col-md-4">
            <select name="category" id="category" class="form-select">
                <option value="" selected="" disabled="" hidden="">Kategori</option>
                <option value="1">Skincare2</option><option value="11">Test</option>                        </select>
        </div>
        <div class="col-12 col-md-1">
            <button type="submit" class="btn btn-secondary">Cari</button>
        </div>

        <div class="col-12">
                                </div>

    </div>

    </form>            </div>
</div>
</div>
<div class="col-12">
    <div class="card">
<!-- <div class="card-header">
    <h5 class="card-title mb-0">Empty card</h5>
</div> -->
<div class="card-body">
    <div class="table-responsive">
        <div class="modal fade" id="ModalDelete21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: 0px">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
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
                    </div><div class="modal fade" id="ModalDelete24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: 0px">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
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
                    </div><div class="modal fade" id="ModalDelete25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header" style="border-bottom: 0px">
                                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
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
                    </div><table class="table table-found">
            <thead>
                <tr>
                    <!--<th>Brand</th>-->
                    <!--<th>Jenis Produk</th>-->

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
                    <!-- <th>Status</th> -->
                                                        <th class="border-left">Atur</th>
                                                </tr>
            </thead>
            <tbody style="border-top: 0px">
                
                    

                    <tr>
                        <td class="align-top border-right">
                            <div class="d-flex">
                                <div class="p-2 pt-0 align-self-center">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="p-2 pt-0">
                                    <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" class="img-thumbnail" width="60px">
                                </div>
                                <div class="p-2 pt-0">
                                    <span>Shampoo</span>
                                    <p><span class="badge bg-secondary">satuan</span></p>
                                </div>
                            </div>
                        </td>
                        <td class="align-top">
                                    Skincare 2
                                    </td><td class="align-top">
                                    Royalty 2
                                    </td>                                    <td class="align-top">
                            <p class="mb-1"><span class="badge bg-primary">HET</span> Rp5.000</p>
                            <p><span class="badge bg-success">HPP</span> Rp4.000</p>
                        </td>

                        <td class="align-top">
                            <div class="d-flex">
                                <div class="p-2 pt-0">
                                    <!-- <button class="copy-text" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                                        Copy to clipboard
                                    </button> -->
                                    <button type="button" class="btn btn-light btn-sm" id="copy" data-bs-trigger="focus" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-clipboard-text="testetsetsttestetsetsttestetsetst" data-bs-original-title="Disalin!">
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                    </button>

                                    <!-- <button type="button" id="copy" class="text-dark" data-bs-toggle="tooltip" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="Copied!" data-clipboard-text="testetsetsttestetsetsttestetsetst">
                                        <i class="fa fa-copy"></i>
                                    </button> -->
                                </div>
                                <div class="p-2 flex-grow-1 pt-0 gradient-text">
                                    <span>testetsetsttestetsetsttestetsetst</span>
                                </div>

                            </div>


                        </td>
                        <td class="align-top"><b>GA-SHAMPOO</b></td>
                        <!-- <td class="align-top"><span class="badge bg-success">aktif</span></td> -->
                                                                <td class="align-top border-left">
                                <a href="https://dashboard.sellerkit.id/product/edit/21" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ModalDelete21" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                            </td>
                                                        </tr>
                
                    

                    <tr>
                        <td class="align-top border-right">
                            <div class="d-flex">
                                <div class="p-2 pt-0 align-self-center">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="p-2 pt-0">
                                    <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" class="img-thumbnail" width="60px">
                                </div>
                                <div class="p-2 pt-0">
                                    <span>Beard Serum</span>
                                    <p><span class="badge bg-secondary">satuan</span></p>
                                </div>
                            </div>
                        </td>
                        <td class="align-top">
                                    Skincare 2
                                    </td><td class="align-top">
                                    Royalty 2
                                    </td>                                    <td class="align-top">
                            <p class="mb-1"><span class="badge bg-primary">HET</span> Rp2.000</p>
                            <p><span class="badge bg-success">HPP</span> Rp1.000</p>
                        </td>

                        <td class="align-top">
                            <div class="d-flex">
                                <div class="p-2 pt-0">
                                    <!-- <button class="copy-text" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                                        Copy to clipboard
                                    </button> -->
                                    <button type="button" class="btn btn-light btn-sm" id="copy" data-bs-trigger="focus" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-clipboard-text="beard" data-bs-original-title="Disalin!">
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                    </button>

                                    <!-- <button type="button" id="copy" class="text-dark" data-bs-toggle="tooltip" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="Copied!" data-clipboard-text="beard">
                                        <i class="fa fa-copy"></i>
                                    </button> -->
                                </div>
                                <div class="p-2 flex-grow-1 pt-0 gradient-text">
                                    <span>beard</span>
                                </div>

                            </div>


                        </td>
                        <td class="align-top"><b>GA-002</b></td>
                        <!-- <td class="align-top"><span class="badge bg-success">aktif</span></td> -->
                                                                <td class="align-top border-left">
                                <a href="https://dashboard.sellerkit.id/product/edit/24" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ModalDelete24" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                            </td>
                                                        </tr>
                
                    

                    <tr>
                        <td class="align-top border-right">
                            <div class="d-flex">
                                <div class="p-2 pt-0 align-self-center">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="p-2 pt-0">
                                    <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_Updo6MnY.jpg" class="img-thumbnail" width="60px">
                                </div>
                                <div class="p-2 pt-0">
                                    <span>Paket Maks</span>
                                    <p><span class="badge bg-secondary">paket</span></p>
                                </div>
                            </div>
                        </td>
                        <td class="align-top">
                                    Skincare 2
                                    </td><td class="align-top">
                                    Royalty 2
                                    </td>                                    <td class="align-top">
                            <p class="mb-1"><span class="badge bg-primary">HET</span> Rp200</p>
                            <p><span class="badge bg-success">HPP</span> Rp100</p>
                        </td>

                        <td class="align-top">
                            <div class="d-flex">
                                <div class="p-2 pt-0">
                                    <!-- <button class="copy-text" data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                                        Copy to clipboard
                                    </button> -->
                                    <button type="button" class="btn btn-light btn-sm" id="copy" data-bs-trigger="focus" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-clipboard-text="asdysadsad" data-bs-original-title="Disalin!">
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                    </button>

                                    <!-- <button type="button" id="copy" class="text-dark" data-bs-toggle="tooltip" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="Copied!" data-clipboard-text="asdysadsad">
                                        <i class="fa fa-copy"></i>
                                    </button> -->
                                </div>
                                <div class="p-2 flex-grow-1 pt-0 gradient-text">
                                    <span>asdysadsad</span>
                                </div>

                            </div>


                        </td>
                        <td class="align-top"><b>P-0002</b></td>
                        <!-- <td class="align-top"><span class="badge bg-success">aktif</span></td> -->
                                                                <td class="align-top border-left">
                                <a href="https://dashboard.sellerkit.id/product/edit/25" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ModalDelete25" class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
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
</script>                </div>
</main>

@endsection
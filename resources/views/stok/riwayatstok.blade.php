@extends('layouts.index')

@section('container')


<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center justify-content-between mb-3">
<h1 class="h3">Riwayat stok Gudang 2</h1>
<div>
<a href="https://dashboard.sellerkit.id/stock/add/2" class="btn btn-link text-dark" style="text-decoration: none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Stok masuk</a>
<a href="https://dashboard.sellerkit.id/stock/out/2" class="btn btn-link text-dark" style="text-decoration: none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Stok keluar</a>
</div>
</div>

<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
    <form action="https://dashboard.sellerkit.id/stock/history/2" method="get" accept-charset="utf-8">

    <div class="row gx-2 gy-2">
        <div class="col-6 col-md-4">
            <input type="date" name="start_date" id="start_date" class="form-control" value="">
        </div>
        <div class="col-6 col-md-4">
            <input type="date" name="end_date" id="end_date" class="form-control" value="">
        </div>
        <div class="col-12 col-md-3">
            <select name="status" id="status" class="form-select">
                <option value="masuk">Masuk</option>
                <option value="terjual">Terjual</option>
                <option value="keluar">Keluar</option>
            </select>
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
<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Atur</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                        <td>28/03/2022 17:26:45</td>    
                        <td>Masuk</td>
                        <td><b>3</b></td>
                        <td>Stok masuk</td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory4" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>28/03/2022 17:35:03</td>    
                        <td>Masuk</td>
                        <td><b>2</b></td>
                        <td>Stok masuk</td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory5" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>28/03/2022 17:36:34</td>    
                        <td>Masuk</td>
                        <td><b>4</b></td>
                        <td>Stok masuk</td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory6" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>09/04/2022 19:29:53</td>    
                        <td>Masuk</td>
                        <td><b>4</b></td>
                        <td>Stok masuk</td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory9" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>21/04/2022 20:06:51</td>    
                        <td>Keluar</td>
                        <td><b>1</b></td>
                        <td>Keluar</td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory10" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>21/04/2022 20:19:24</td>    
                        <td>Keluar</td>
                        <td><b>1</b></td>
                        <td>test</td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory11" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>21/04/2022 20:59:51</td>    
                        <td>Masuk</td>
                        <td><b>1</b></td>
                        <td>Pembatalan Invoice <b>invoice2222</b></td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory16" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>21/04/2022 21:23:37</td>    
                        <td>Masuk</td>
                        <td><b>2</b></td>
                        <td>Retur invoice INV09900999</td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory17" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr><tr>
                        <td>08/06/2022 16:57:40</td>    
                        <td>Terjual</td>
                        <td><b>1</b></td>
                        <td>Terjual pada Invoice <b>220511TYMDEBUT</b></td>
                        <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#detailHistory27" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></td>
                    </tr>                    </tbody>
    </table>
</div>
</div>
</div>
</div>


<div class="modal fade" id="detailHistory4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Shampoo</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x2 pcs</td></tr><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Handuk</p>
                            <span class="badge bg-secondary">hadiah</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Shampoo</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td></tr><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Handuk</p>
                            <span class="badge bg-secondary">hadiah</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Shampoo</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x3 pcs</td></tr><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Handuk</p>
                            <span class="badge bg-secondary">hadiah</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Beard Serum</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x4 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Beard Serum</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Beard Serum</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Shampoo</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Beard Serum</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td></tr><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Handuk</p>
                            <span class="badge bg-secondary">hadiah</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>

<div class="modal fade" id="detailHistory27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rincian jumlah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <table class="table">
            <tbody><tr>
                        <td><div class="d-flex">
                        <div class="p-2 flex-shrink">
                            <img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" class="img-thumbnail" width="50px">
                        </div>
                        <div class="p-2 flex-grow-1">
                            <p class="mb-0">Beard Serum</p>
                            <span class="badge bg-secondary">produk</span>
                        </div>
                    </div></td>
                      <td>x1 pcs</td>                    </tr></tbody></table>

    </div>
</div>
</div>
</div>
    </div>
</main>


@endsection
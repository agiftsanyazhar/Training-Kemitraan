@extends('layouts.index')

@section('container')


<main class="content">
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3 text-capitalize">Stok {{ $title[2] }}</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="https://dashboard.sellerkit.id/stock/view/2" method="get" accept-charset="utf-8">

                        <div class="row gx-2 gy-2">
                            <div class="col-12 col-md-11">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <select name="search" id="search" class="form-select">
                                            <option value="product_name">Nama produk</option>
                                            <option value="gift_name">Nama hadiah</option>
                                        </select>
                                    </div>
                                    <input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-12 col-md-1">
                                <button type="submit" class="btn btn-secondary">Cari</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <ul class="nav nav-pills sk-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-product-tab" data-bs-toggle="pill" data-bs-target="#pills-product" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Produk <span class="badge bg-danger">{{ $countstok }}</span></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-gift-tab" data-bs-toggle="pill" data-bs-target="#pills-gift" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Hadiah <span class="badge bg-danger">{{ $countgift }}</span></button>
            </li>
        </ul>
        <div class="card">
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-product" role="tabpanel" aria-labelledby="pills-product-tab">
                        <table class="table">
                            <tbody>
                                @foreach ($stok as $data)
                                <tr>
                                    <td width="10%"><img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" alt="Beard Serum" class="img-thumbnail" width="50px"></td>
                                    <td class="align-top">
                                        <p class="mb-0">{{ $data->produk->nama_produk }}</p>
                                        <span class="badge bg-secondary">{{ $data->brand->nama_brand }}</span>
                                    </td>
                                    <td>{{ $data->stok }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-gift" role="tabpanel" aria-labelledby="pills-gift-tab">
                        <table class="table">
                            @foreach ($gift as $data)
                            <tr>
                                <td width="10%"><img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" alt="Beard Serum" class="img-thumbnail" width="50px"></td>
                                <td class="align-top">
                                    <p class="mb-0">{{ $data->produk->nama_produk }}</p>
                                </td>
                                <td>{{ $data->stok }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
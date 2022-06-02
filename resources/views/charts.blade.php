@extends('layouts.layout_dashboard')

@section('container')

<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center justify-content-between mb-3">
<h1 class="h3">Daftar pesanan</h1>
<div>
<a href="https://dashboard.sellerkit.id/order/import" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Impor Pesanan</a>
<a href="https://dashboard.sellerkit.id/order/add" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Tambah Pesanan</a>
</div>
</div>

<form action="https://dashboard.sellerkit.id/order" method="get" accept-charset="utf-8">

<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-xl">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Filter pesanan</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label for="shipment" class="mb-2">Kurir</label>
                <select name="shipment" id="shipment" class="form-select">
                    <option value="">Semua kurir</option>
                    <option value="1">JNE</option><option value="2">JNT</option><option value="3">SICEPAT</option><option value="4">ANTERAJA</option><option value="5">SHOPEE_EXPRESS</option><option value="6">GOSEND</option><option value="7">NINJA</option><option value="8">LAZADA_EXPRESS</option><option value="9">GOJEK</option><option value="10">GRAB</option><option value="11">INDAH</option><option value="12">POS</option><option value="13">LELEXPRESS</option><option value="14">LION_PARCEL</option><option value="15">PAHALA_EXPRESS</option><option value="16">TIKI_EXPRESS</option>                            </select>
            </div>

            <label class="mb-2">Tanggal pesanan</label>
            <div class="input-group mb-3">
                <input type="date" name="start_date" class="form-control" value="">
                <span class="input-group-text bg-white">-</span>
                <input type="date" name="end_date" class="form-control" value="">
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3">
                <label class="mb-2">Jumlah</label>
                <div class="input-group mb-3">
                    <input type="number" name="min" min="1" class="form-control" placeholder="Min" value="">
                    <span class="input-group-text bg-white">~</span>
                    <input type="text" name="max" min="1" class="form-control" placeholder="Max" value="">
                </div>
            </div>

            <label for="rts_date" class="mb-2">Tanggal RTS</label>
            <div class="input-group mb-3">
                <input type="date" name="rts_start_date" class="form-control" value="">
                <span class="input-group-text bg-white">-</span>
                <input type="date" name="rts_end_date" class="form-control" value="">
            </div>
        </div>
        <div class="col-4">
            <div class="mb-3">
                <label for="status_label" class="mb-2">Status label</label>
                <select name="status_label" id="status_label" class="form-select">
                    <option value="">Semua status</option>
                    <option value="printed">Sudah dicetak</option>
                    <option value="not_printed">Belum dicetak</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="warehouse" class="mb-2">Gudang</label>
                <select name="warehouse" id="warehouse" class="form-select">
                    <option value="">Semua gudang</option>
                    <option value="1">Gudang 1</option><option value="2">Gudang 2</option><option value="3">Gudang 3</option><option value="8">Gudang C</option><option value="12">Gudang Garam</option><option value="13">Gudang Babadan</option><option value="15">Gudang Baru</option><option value="18">Gudang Dropshipper</option>                            </select>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
    <button type="submit" class="btn btn-primary">Cari</button>
</div>
</div>
</div>
</div>

<div class="row" style="font-size: 13px">
<div class="col-12">
<div class="card">
<div class="card-body">
    <div class="row gx-3 gy-3 mb-3">
        <div class="col-md-4">
            <div class="input-group">
                <select name="search" id="search_by" class="form-select" style="width: 20px">
                    <option value="order_invoice">Order ID</option><option value="product_name">Nama Produk</option><option value="product_sku">Kode SKU</option><option value="order_resi">Resi Order</option><option value="customer_name">Nama Pembeli</option><option value="customer_phone">Telepon Pembeli</option><option value="receipent">Nama Penerima</option>                            </select>
                <input type="text" name="keyword" id="search_key" class="form-control form-control-md" value="" placeholder="Cari">
            </div>
        </div>
        <div class="col-md-4">
            <select name="channel" class="form-select">
                <option value="">Channel</option>
                <option value="1">Shopee</option><option value="2">Lazada</option><option value="3">Tokopedia</option><option value="4">Bukalapak</option><option value="5">Tiktok</option><option value="6">Direct</option><option value="7">Whatsapp</option>                            <!-- <option value="1">Channel</option> -->
            </select>
        </div>
        <div class="col-md-4">
            <select name="shop" class="form-select">
                <option value="">Toko</option>
                <option value="4">Toko_admin</option><option value="5">Gegegege</option><option value="7">Tokosales_</option><option value="8">Toko_tokped</option><option value="9">Toko_lazada</option>                        </select>
        </div>

    </div>
    <div class="row gx-3 gy-3 mb-3">
        <div class="col-md-3">
            <select id="provinces" class="form-select  choices-single" type="text" name="provinces">
                <option value="">Pilih Provinsi</option>
                <option value="ACEH" data-id="11">Aceh</option><option value="BALI" data-id="51">Bali</option><option value="BANTEN" data-id="36">Banten</option><option value="BENGKULU" data-id="17">Bengkulu</option><option value="DI YOGYAKARTA" data-id="34">Di Yogyakarta</option><option value="DKI JAKARTA" data-id="31">Dki Jakarta</option><option value="GORONTALO" data-id="75">Gorontalo</option><option value="JAMBI" data-id="15">Jambi</option><option value="JAWA BARAT" data-id="32">Jawa Barat</option><option value="JAWA TENGAH" data-id="33">Jawa Tengah</option><option value="JAWA TIMUR" data-id="35">Jawa Timur</option><option value="KALIMANTAN BARAT" data-id="61">Kalimantan Barat</option><option value="KALIMANTAN SELATAN" data-id="63">Kalimantan Selatan</option><option value="KALIMANTAN TENGAH" data-id="62">Kalimantan Tengah</option><option value="KALIMANTAN TIMUR" data-id="64">Kalimantan Timur</option><option value="KALIMANTAN UTARA" data-id="65">Kalimantan Utara</option><option value="KEPULAUAN BANGKA BELITUNG" data-id="19">Kepulauan Bangka Belitung</option><option value="KEPULAUAN RIAU" data-id="21">Kepulauan Riau</option><option value="LAMPUNG" data-id="18">Lampung</option><option value="MALUKU" data-id="81">Maluku</option><option value="MALUKU UTARA" data-id="82">Maluku Utara</option><option value="NUSA TENGGARA BARAT" data-id="52">Nusa Tenggara Barat</option><option value="NUSA TENGGARA TIMUR" data-id="53">Nusa Tenggara Timur</option><option value="PAPUA" data-id="94">Papua</option><option value="PAPUA BARAT" data-id="91">Papua Barat</option><option value="RIAU" data-id="14">Riau</option><option value="SULAWESI BARAT" data-id="76">Sulawesi Barat</option><option value="SULAWESI SELATAN" data-id="73">Sulawesi Selatan</option><option value="SULAWESI TENGAH" data-id="72">Sulawesi Tengah</option><option value="SULAWESI TENGGARA" data-id="74">Sulawesi Tenggara</option><option value="SULAWESI UTARA" data-id="71">Sulawesi Utara</option><option value="SUMATERA BARAT" data-id="13">Sumatera Barat</option><option value="SUMATERA SELATAN" data-id="16">Sumatera Selatan</option><option value="SUMATERA UTARA" data-id="12">Sumatera Utara</option>                        </select>
            <div class="invalid-feedback">
                                        </div>
        </div>
        <div class="col-md-3">
            <select id="kota" class="form-select " name="kota">
                <option value="">Pilih Kabupaten / Kota</option>
            </select>
            <div class="invalid-feedback">
                                        </div>
        </div>

        <div class="col-md-3">
            <select id="kecamatan" class="form-select " name="kecamatan">
                <option value="">Pilih Kecamatan</option>
            </select>
            <div class="invalid-feedback">
                                        </div>
        </div>

        <div class="col-md-3">
            <select id="kelurahan" class="form-select " name="kelurahan">
                <option value="">Pilih Kelurahan</option>
            </select>
            <div class="invalid-feedback">
                                        </div>
        </div>

    </div>
    <div class="row gx-3 gy-3 mb-2">
        <div class="col-md-10">
            <select name="sort_by" id="sort_by" class="form-select">
                <!-- <option value="sku_asc">SKU Produk (A-Z)</option>
                <option value="sku_desc">SKU (Z-A)</option> -->
                <option value="latest_order" selected="">Waktu pembuatan terbaru</option>
                <option value="oldest_order">Waktu pembuatan terlama</option>
                <option value="latest_shipping">Waktu pengiriman terdekat</option>
                <option value="oldest_shipping">Waktu pengiriman terlama</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-dark" id="search_now">Cari</button>
            <a href="javascript:void(0)" data-bs-target="#filterModal" data-bs-toggle="modal" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg> Filter</a>
        </div>
    </div>
    <div class="row gx-3">
        <div class="col-12">
                                </div>
    </div>
</div>
</div>
</div>
</div>

</form>
<div class="row">
<div class="col-12">
<ul class="nav nav-pills sk-tab" id="pills-tab" role="tablist">
<li class="nav-item" role="presentation">
    <button class="nav-link " id="pills-all-orders-tab" data-bs-toggle="pill" data-bs-target="#pills-all-orders" type="button" role="tab" aria-controls="pills-all-orders" aria-selected="false">Semua pesanan</button>
</li>
<li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-today-tab" data-bs-toggle="pill" data-bs-target="#pills-today" type="button" role="tab" aria-controls="pills-today" aria-selected="true">Hari ini</button>
</li>
<li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="false">Tertunda</button>
</li>
<li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-processed-tab" data-bs-toggle="pill" data-bs-target="#pills-processed" type="button" role="tab" aria-controls="pills-processed" aria-selected="false">Diproses</button>
</li>
<li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-delivered-tab" data-bs-toggle="pill" data-bs-target="#pills-delivered" type="button" role="tab" aria-controls="pills-delivered" aria-selected="false">Terkirim</button>
</li>
<li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-received-tab" data-bs-toggle="pill" data-bs-target="#pills-received" type="button" role="tab" aria-controls="pills-received" aria-selected="false">Diterima</button>
</li>
<li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-cancelled-tab" data-bs-toggle="pill" data-bs-target="#pills-cancelled" type="button" role="tab" aria-controls="pills-cancelled" aria-selected="false">Dibatalkan</button>
</li>
</ul>

<div class="card">
<div class="card-body">
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade " id="pills-all-orders" role="tabpanel" aria-labelledby="pills-all-orders-tab">
            <div class="table-responsive">
                                                <table class="table bg-white table-found" id="orders_table">
                        <thead>
                            <tr>
                                <th class="pb-0 px-0">
                                    <div class="d-flex pb-1" style="border-right: 1px solid #ddd">
                                        <div class="p-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        </div>
                                        <div class="p-2">
                                            Inv. ditoko
                                        </div>
                                    </div>
                                </th>
                                <th>Pembeli</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Hadiah</th>
                                <th>Kurir</th>
                                <th>Status Pesanan</th>
                                <th>Waktu</th>
                                <th>Status Pengiriman</th>
                                <th>Catatan</th>
                                <th class="pb-0 px-0 border-left">
                                    <div class="d-flex pb-1">
                                        <div class="p-2">Atur</div>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody id="order_items" style="border-top: 0px">
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">220511TYMDEBUT</p>
                                                <p class="mb-1">Batas RTS: 13 May 2022</p>
                                                <p class="text-muted text-capitalize mb-1">diproses</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Kiki_tri01</p>
                                        <p class="mb-1">6281218427817</p>
                                        <p class="mb-1">,Kabupaten Bekasi</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp340.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp333.000</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">ANTERAJA</p>
                                        <p class="mb-1">10004540781111</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 1]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                        </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">11 May 2022 : 07.15</p>
                                                                                                    <p class="mb-1">26 May 2022 : 13.38</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                        <p class="mb-1">&nbsp;</p>
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader40"></div>
                                        <div id="recent_manifest40" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(40)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(40)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top"></td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote40" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder40" class="text-danger btn btn-light ">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">invoice222223</p>
                                                <p class="mb-1">Batas RTS: 11 May 2022</p>
                                                <p class="text-muted text-capitalize mb-1">tertunda</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Bubutan,Kota Surabaya</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Shampoo</b></p>
                                                    <p class="text-muted">Rp5.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp5.000</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">resi22243</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Stock ready</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                        </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">08 May 2022 : 09.35</p>
                                        <p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p>
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader36"></div>
                                        <div id="recent_manifest36" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(36)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(36)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote36" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder36" class="text-danger btn btn-light ">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">0099900223</p>
                                                <p class="mb-1">Batas RTS: 13 Apr 2022</p>
                                                <p class="text-muted text-capitalize mb-1">pesanan dibatalkan</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Pilih Kecamatan,Pilih Kabupaten / Kota</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Shampoo</b></p>
                                                    <p class="text-muted">Rp5.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp5.000</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">INIRESI10001234</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 2]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">10 Apr 2022 : 13.29</p>
                                                                                                    <p class="mb-1">10 Apr 2022 : 13.44</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">10 Apr 2022 : 13.46</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader34"></div>
                                        <div id="recent_manifest34" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(34)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(34)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote34" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder34" class="text-danger btn btn-light disabled">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">INV09900999222</p>
                                                <p class="mb-1">Batas RTS: 08 Apr 2022</p>
                                                <p class="text-muted text-capitalize mb-1">sudah dikemas</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Arosbaya,Kabupaten Bangkalan</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp2.000 x 3</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp6.000</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNT</p>
                                        <p class="mb-1">JP2872039362</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 2]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">05 Apr 2022 : 13.01</p>
                                                                                                    <p class="mb-1">07 Apr 2022 : 10.43</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">07 Apr 2022 : 13.14</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader31"></div>
                                        <div id="recent_manifest31" style="background: #eee">
                                                                                                        <div class="d-flex mb-2">
                                                    <div class="p-2 flex-shrink">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                                    </div>
                                                    <div class="p-2 flex-grow-1">
                                                        <p class="mb-1">06/04/2022 21.18</p>
                                                        <p class="mb-1">MOJOSARI - NGORO</p>
                                                        <p class="mb-1">Terkirim</p>
                                                    </div>
                                                </div>
                                                                                                </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(31)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(31)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote31" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder31" class="text-danger btn btn-light ">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">INV09900999</p>
                                                <p class="mb-1">Batas RTS: 03 Apr 2022</p>
                                                <p class="text-muted text-capitalize mb-1">pesanan dibatalkan</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> gegegege</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Arosbaya,Kabupaten Bangkalan</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp2.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp2.000</td>
                                    <td class="align-top">
                                                                                                    <div class="d-flex" style="width: 200px">
                                                    <div class="flex-shrink p-2 pt-0">
                                                        <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" style="width: 60px;">
                                                    </div>
                                                    <div class="flex-grow-1 p-2 pt-0">
                                                        <p class="mb-1">Handuk</p>
                                                        <p class="text-muted">Rp100 x 1</p>
                                                    </div>
                                                </div>
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">LXAD1200018</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 1]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">31 Mar 2022 : 15.09</p>
                                                                                                    <p class="mb-1">31 Mar 2022 : 15.35</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">31 Mar 2022 : 15.36</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader29"></div>
                                        <div id="recent_manifest29" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(29)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(29)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote29" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder29" class="text-danger btn btn-light disabled">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">12345600</p>
                                                <p class="mb-1">Batas RTS: 27 Mar 2022</p>
                                                <p class="text-muted text-capitalize mb-1">pesanan diterima</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Arosbaya,Kabupaten Bangkalan</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp2.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp2.000</td>
                                    <td class="align-top">
                                                                                                    <div class="d-flex" style="width: 200px">
                                                    <div class="flex-shrink p-2 pt-0">
                                                        <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" style="width: 60px;">
                                                    </div>
                                                    <div class="flex-grow-1 p-2 pt-0">
                                                        <p class="mb-1">Handuk</p>
                                                        <p class="text-muted">Rp200 x 1</p>
                                                    </div>
                                                </div>
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNT</p>
                                        <p class="mb-1">INIRESI</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 1]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">24 Mar 2022 : 10.15</p>
                                                                                                    <p class="mb-1">24 Mar 2022 : 12.11</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">24 Mar 2022 : 12.11</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader28"></div>
                                        <div id="recent_manifest28" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(28)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(28)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">test</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote28" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder28" class="text-danger btn btn-light disabled">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">INV09900999</p>
                                                <p class="mb-1">Batas RTS: 24 Mar 2022</p>
                                                <p class="text-muted text-capitalize mb-1">produk terkirim</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Arosbaya,Kabupaten Bangkalan</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_Updo6MnY.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Paket Maks</b></p>
                                                    <p class="text-muted">Rp200 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp200</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">LXAD1200010</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 2]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">21 Mar 2022 : 11.10</p>
                                                                                                    <p class="mb-1">22 Mar 2022 : 08.50</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">26 Mar 2022 : 12.32</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader20"></div>
                                        <div id="recent_manifest20" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(20)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(20)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote20" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder20" class="text-danger btn btn-light disabled">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">220215H2BFM0AK</p>
                                                <p class="mb-1">Batas RTS: 17 Feb 2022</p>
                                                <p class="text-muted text-capitalize mb-1">tertunda</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Julijolly</p>
                                        <p class="mb-1">6283114996226</p>
                                        <p class="mb-1">,Kabupaten Badung</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px;">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp175.500 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp185.915</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNT</p>
                                        <p class="mb-1">JP6954298066</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Stock ready</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                        </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">15 Feb 2022 : 08.10</p>
                                        <p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p>
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader39"></div>
                                        <div id="recent_manifest39" style="background: #eee">
                                                                                                        <div class="d-flex mb-2">
                                                    <div class="p-2 flex-shrink">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                                    </div>
                                                    <div class="p-2 flex-grow-1">
                                                        <p class="mb-1">17/02/2022 16.04</p>
                                                        <p class="mb-1">BADUNG - DC_MENGWI</p>
                                                        <p class="mb-1">Terkirim</p>
                                                    </div>
                                                </div>
                                                                                                </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(39)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(39)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top"></td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote39" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder39" class="text-danger btn btn-light ">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                </tbody>
                    </table>
                                        </div>
        </div>
        <div class="tab-pane fade active show" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
            <div class="table-responsive">
                                                <table class="table bg-white table-not-found" id="orders_table">
                        <thead>
                            <tr>
                                <th>Inv. ditoko</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Pembeli</th>
                                <th>Kurir</th>
                                <th>Status Pesanan</th>
                                <th>Waktu</th>
                                <th>Status Pengiriman</th>
                                <th>Catatan</th>
                                <th>Atur</th>

                            </tr>
                        </thead>
                        <tbody id="order_items" style="border-top: 0px">
                            <tr>
                                <td class="align-top text-center py-5" colspan="9">
                                    <p><i class="fa fa-box text-muted fa-3x" aria-hidden="true"></i></p>
                                    Data tidak ditemukan
                                </td>
                            </tr>
                        </tbody>
                    </table>
                                        </div>
        </div>
        <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
            <div class="table-responsive">
                                                <table class="table bg-white table-found" id="orders_table">
                        <thead>
                            <tr>
                                <th class="pb-0 px-0">
                                    <div class="d-flex pb-1" style="border-right: 1px solid #ddd">
                                        <div class="p-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        </div>
                                        <div class="p-2">
                                            Inv. ditoko
                                        </div>
                                    </div>
                                </th>
                                <th>Pembeli</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Hadiah</th>
                                <th>Kurir</th>
                                <th>Status Pesanan</th>
                                <th>Waktu</th>
                                <th>Status Pengiriman</th>
                                <th>Catatan</th>
                                <th class="pb-0 px-0 border-left">
                                    <div class="d-flex pb-1">
                                        <div class="p-2">Atur</div>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody id="order_items" style="border-top: 0px">
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">invoice222223</p>
                                                <p class="mb-1">Batas RTS: 11 May 2022</p>
                                                <p class="text-muted text-capitalize mb-1">tertunda</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Bubutan,Kota Surabaya</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" style="width: 60px">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Shampoo</b></p>
                                                    <p class="text-muted">Rp5.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp5.000</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">resi22243</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Stock ready</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                        </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">08 May 2022 : 09.35</p>
                                        <p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p>
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader36"></div>
                                        <div id="recent_manifest36" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(36)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(36)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote36" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder36" class="text-danger btn btn-light ">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">220215H2BFM0AK</p>
                                                <p class="mb-1">Batas RTS: 17 Feb 2022</p>
                                                <p class="text-muted text-capitalize mb-1">tertunda</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Julijolly</p>
                                        <p class="mb-1">6283114996226</p>
                                        <p class="mb-1">,Kabupaten Badung</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp175.500 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp185.915</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNT</p>
                                        <p class="mb-1">JP6954298066</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Stock ready</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                        </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">15 Feb 2022 : 08.10</p>
                                        <p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p>
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader39"></div>
                                        <div id="recent_manifest39" style="background: #eee">
                                                                                                        <div class="d-flex mb-2">
                                                    <div class="p-2 flex-shrink">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                                    </div>
                                                    <div class="p-2 flex-grow-1">
                                                        <p class="mb-1">17/02/2022 16.04</p>
                                                        <p class="mb-1">BADUNG - DC_MENGWI</p>
                                                        <p class="mb-1">Terkirim</p>
                                                    </div>
                                                </div>
                                                                                                </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(39)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(39)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top"></td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote39" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder39" class="text-danger btn btn-light ">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                </tbody>
                    </table>
                                        </div>
        </div>
        <div class="tab-pane fade" id="pills-processed" role="tabpanel" aria-labelledby="pills-processed-tab">
            <div class="table-responsive">
                                                <table class="table bg-white table-found" id="orders_table">
                        <thead>
                            <tr>
                                <th class="pb-0 px-0">
                                    <div class="d-flex pb-1" style="border-right: 1px solid #ddd">
                                        <div class="p-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        </div>
                                        <div class="p-2">
                                            Inv. ditoko
                                        </div>
                                    </div>
                                </th>
                                <th>Pembeli</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Hadiah</th>
                                <th>Kurir</th>
                                <th>Status Pesanan</th>
                                <th>Waktu</th>
                                <th>Status Pengiriman</th>
                                <th>Catatan</th>
                                <th class="pb-0 px-0 border-left">
                                    <div class="d-flex pb-1">
                                        <div class="p-2">Atur</div>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody id="order_items" style="border-top: 0px">
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">220511TYMDEBUT</p>
                                                <p class="mb-1">Batas RTS: 13 May 2022</p>
                                                <p class="text-muted text-capitalize mb-1">diproses</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Kiki_tri01</p>
                                        <p class="mb-1">6281218427817</p>
                                        <p class="mb-1">,Kabupaten Bekasi</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp340.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp333.000</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">ANTERAJA</p>
                                        <p class="mb-1">10004540781111</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 1]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                        </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">11 May 2022 : 07.15</p>
                                                                                                    <p class="mb-1">26 May 2022 : 13.38</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                        <p class="mb-1">&nbsp;</p>
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader40"></div>
                                        <div id="recent_manifest40" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(40)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(40)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top"></td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote40" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder40" class="text-danger btn btn-light ">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                </tbody>
                    </table>
                                        </div>
        </div>
        <div class="tab-pane fade" id="pills-delivered" role="tabpanel" aria-labelledby="pills-delivered-tab">
            <div class="table-responsive">
                                                <table class="table bg-white table-found" id="orders_table">
                        <thead>
                            <tr>
                                <th class="pb-0 px-0">
                                    <div class="d-flex pb-1" style="border-right: 1px solid #ddd">
                                        <div class="p-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        </div>
                                        <div class="p-2">
                                            Inv. ditoko
                                        </div>
                                    </div>
                                </th>
                                <th>Pembeli</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Hadiah</th>
                                <th>Kurir</th>
                                <th>Status Pesanan</th>
                                <th>Waktu</th>
                                <th>Status Pengiriman</th>
                                <th>Catatan</th>
                                <th class="pb-0 px-0 border-left">
                                    <div class="d-flex pb-1">
                                        <div class="p-2">Atur</div>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody id="order_items" style="border-top: 0px">
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">INV09900999</p>
                                                <p class="mb-1">Batas RTS: 24 Mar 2022</p>
                                                <p class="text-muted text-capitalize mb-1">produk terkirim</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Arosbaya,Kabupaten Bangkalan</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_Updo6MnY.jpg" style="width: 60px">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Paket Maks</b></p>
                                                    <p class="text-muted">Rp200 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp200</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">LXAD1200010</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 2]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">21 Mar 2022 : 11.10</p>
                                                                                                    <p class="mb-1">22 Mar 2022 : 08.50</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">26 Mar 2022 : 12.32</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader20"></div>
                                        <div id="recent_manifest20" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(20)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(20)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote20" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder20" class="text-danger btn btn-light disabled">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                </tbody>
                    </table>
                                        </div>
        </div>
        <div class="tab-pane fade" id="pills-received" role="tabpanel" aria-labelledby="pills-received-tab">
            <div class="table-responsive">
                                                <table class="table bg-white table-found" id="orders_table">
                        <thead>
                            <tr>
                                <th class="pb-0 px-0">
                                    <div class="d-flex pb-1" style="border-right: 1px solid #ddd">
                                        <div class="p-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        </div>
                                        <div class="p-2">
                                            Inv. ditoko
                                        </div>
                                    </div>
                                </th>
                                <th>Pembeli</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Hadiah</th>
                                <th>Kurir</th>
                                <th>Status Pesanan</th>
                                <th>Waktu</th>
                                <th>Status Pengiriman</th>
                                <th>Catatan</th>
                                <th class="pb-0 px-0 border-left">
                                    <div class="d-flex pb-1">
                                        <div class="p-2">Atur</div>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody id="order_items" style="border-top: 0px">
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">12345600</p>
                                                <p class="mb-1">Batas RTS: 27 Mar 2022</p>
                                                <p class="text-muted text-capitalize mb-1">pesanan diterima</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Arosbaya,Kabupaten Bangkalan</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp2.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp2.000</td>
                                    <td class="align-top">
                                                                                                    <div class="d-flex" style="width: 200px">
                                                    <div class="flex-shrink p-2 pt-0">
                                                        <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" style="width: 60px">
                                                    </div>
                                                    <div class="flex-grow-1 p-2 pt-0">
                                                        <p class="mb-1">Handuk</p>
                                                        <p class="text-muted">Rp200 x 1</p>
                                                    </div>
                                                </div>
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNT</p>
                                        <p class="mb-1">INIRESI</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 1]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">24 Mar 2022 : 10.15</p>
                                                                                                    <p class="mb-1">24 Mar 2022 : 12.11</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">24 Mar 2022 : 12.11</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader28"></div>
                                        <div id="recent_manifest28" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(28)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(28)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">test</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote28" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder28" class="text-danger btn btn-light disabled">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                </tbody>
                    </table>
                                        </div>
        </div>
        <div class="tab-pane fade" id="pills-cancelled" role="tabpanel" aria-labelledby="pills-cancelled-tab">
            <div class="table-responsive">
                                                <table class="table bg-white table-found" id="orders_table">
                        <thead>
                            <tr>
                                <th class="pb-0 px-0">
                                    <div class="d-flex pb-1" style="border-right: 1px solid #ddd">
                                        <div class="p-2">
                                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                        </div>
                                        <div class="p-2">
                                            Inv. ditoko
                                        </div>
                                    </div>
                                </th>
                                <th>Pembeli</th>
                                <th>Pesanan</th>
                                <th>Total</th>
                                <th>Hadiah</th>
                                <th>Kurir</th>
                                <th>Status Pesanan</th>
                                <th>Waktu</th>
                                <th>Status Pengiriman</th>
                                <th>Catatan</th>
                                <th class="pb-0 px-0 border-left">
                                    <div class="d-flex pb-1">
                                        <div class="p-2">Atur</div>
                                    </div>
                                </th>

                            </tr>
                        </thead>
                        <tbody id="order_items" style="border-top: 0px">
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">0099900223</p>
                                                <p class="mb-1">Batas RTS: 13 Apr 2022</p>
                                                <p class="text-muted text-capitalize mb-1">pesanan dibatalkan</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Pilih Kecamatan,Pilih Kabupaten / Kota</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" style="width: 60px">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Shampoo</b></p>
                                                    <p class="text-muted">Rp5.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp5.000</td>
                                    <td class="align-top">
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">INIRESI10001234</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 2]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">10 Apr 2022 : 13.29</p>
                                                                                                    <p class="mb-1">10 Apr 2022 : 13.44</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">10 Apr 2022 : 13.46</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader34"></div>
                                        <div id="recent_manifest34" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(34)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(34)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote34" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder34" class="text-danger btn btn-light disabled">Batal order</a></p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                                                        <tr>

                                    <td class="align-top py-0 px-0 border-right">
                                        <div class="d-flex pb-4" style="border-right: 1px solid #ccc">
                                            <div class="p-2 flex-fill">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            </div>
                                            <div class="p-2 flex-fill">
                                                <p class="mb-1">INV09900999</p>
                                                <p class="mb-1">Batas RTS: 03 Apr 2022</p>
                                                <p class="text-muted text-capitalize mb-1">pesanan dibatalkan</p>
                                                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i> gegegege</p>
                                            </div>
                                        </div>

                                    </td>
                                    <td class="align-top">
                                        <p class="mb-1">Galang Buana</p>
                                        <p class="mb-1">085156641115</p>
                                        <p class="mb-1">Arosbaya,Kabupaten Bangkalan</p>
                                    </td>
                                    <td class="align-top">
                                                                                                <div class="d-flex" style="width: 200px">
                                                <div class="flex-shrink p-2 pt-0">
                                                    <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" style="width: 60px">
                                                </div>
                                                <div class="flex-grow-1 p-2 pt-0">
                                                    <p class="mb-1"><b>Beard Serum</b></p>
                                                    <p class="text-muted">Rp2.000 x 1</p>
                                                </div>
                                            </div>
                                                                                        </td>
                                    <td class="align-top">Rp2.000</td>
                                    <td class="align-top">
                                                                                                    <div class="d-flex" style="width: 200px">
                                                    <div class="flex-shrink p-2 pt-0">
                                                        <img class="img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/gift/SK_GIFT_SxcytErK.jpg" style="width: 60px">
                                                    </div>
                                                    <div class="flex-grow-1 p-2 pt-0">
                                                        <p class="mb-1">Handuk</p>
                                                        <p class="text-muted">Rp100 x 1</p>
                                                    </div>
                                                </div>
                                                                                        </td>

                                    <td class="align-top">
                                        <p class="mb-1">JNE</p>
                                        <p class="mb-1">LXAD1200018</p>
                                    </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Stock Ready [Gudang 1]</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                                        <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Sudah dikemas</p>
                                                                                            </td>
                                    <td class="align-top">
                                                                                                    <p class="mb-1">31 Mar 2022 : 15.09</p>
                                                                                                    <p class="mb-1">31 Mar 2022 : 15.35</p>
                                                                                                    <p class="mb-1">01 Jan 1970 : 07.00</p>
                                                                                                    <p class="mb-1">31 Mar 2022 : 15.36</p>
                                        
                                        <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                                    </td>
                                    <td class="align-top">
                                        <div id="loader29"></div>
                                        <div id="recent_manifest29" style="background: #eee">
                                            <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                                    </div>
                                        <div class=" d-grid gap-2">
                                            <button onclick="updateWaybill(29)" class="btn btn-light">Update Status Pengiriman</button>
                                            <button onclick="trackWaybill(29)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                        </div>
                                    </td>
                                    <td class="align-top">tidak ada catatan</td>
                                    <td class="align-top px-0 py-0 border-left">
                                        <div class="d-flex pb-4">
                                            <div class="p-2">
                                                <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote29" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder29" class="text-danger btn btn-light disabled">Batal order</a></p>
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

<form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="40">
<div class="modal fade" id="OrderNote40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="40">
<div class="modal fade" id="CancelOrder40" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="36">
<div class="modal fade" id="OrderNote36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control">tidak ada catatan</textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="36">
<div class="modal fade" id="CancelOrder36" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="34">
<div class="modal fade" id="OrderNote34" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control">tidak ada catatan</textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="34">
<div class="modal fade" id="CancelOrder34" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="31">
<div class="modal fade" id="OrderNote31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control">tidak ada catatan</textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="31">
<div class="modal fade" id="CancelOrder31" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="29">
<div class="modal fade" id="OrderNote29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control">tidak ada catatan</textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="29">
<div class="modal fade" id="CancelOrder29" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="28">
<div class="modal fade" id="OrderNote28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control">test</textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="28">
<div class="modal fade" id="CancelOrder28" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="20">
<div class="modal fade" id="OrderNote20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control">tidak ada catatan</textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="20">
<div class="modal fade" id="CancelOrder20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="39">
<div class="modal fade" id="OrderNote39" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <textarea name="order_note" id="order_note" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
    </div>
</div>
</div>
</div>
</form><form action="https://dashboard.sellerkit.id/order/cancel_order" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="39">
<div class="modal fade" id="CancelOrder39" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
    <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body text-center">
        <i class="text-warning fa fa-warning fa-10x mb-3" aria-hidden="true"></i>
        <div class="mb-4">
            <h2>Apakah anda yakin?</h2>
        </div>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-danger">Batalkan pesanan
    </button></div>
</div>
</div>
</div>
</form>
<div class="modal fade" id="ModalTrack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header" style="border-bottom: 0px">
    <h5 class="modal-title" id="exampleModalLabel">Lacak Resi / AWB</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div id="loader">
        <div class="d-flex justify-content-center">
            <div class="spinner-border my-5" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div id="track_container"></div>
</div>
</div>
</div>
</div>

<script>
function trackWaybill(order_id) {
$.ajax({
url: 'https://dashboard.sellerkit.id/order/track_waybill/' + order_id,
method: 'post',
beforeSend: function() {
    $('#track_container').hide();
    $('#loader').show(); // Assuming that you have some loader defined
    updateWaybill(order_id);
},
success: function(data) {
    $('#track_container').show();
    $('#track_container').html(data);
},
complete: function() {
    $('#loader').hide(); //Hide this loader
},
});
}

function updateWaybill(order_id) {
$.ajax({
url: 'https://dashboard.sellerkit.id/order/update_waybill/' + order_id,
method: 'post',
beforeSend: function() {
    $('#loader' + order_id).html(
        '<div class="d-flex justify-content-center">' +
        '<div class = "spinner-border my-3" role="status">' +
        '<span class = "visually-hidden" > Loading... < /span>' +
        '</div>' +
        '</div>'
    );
    $('#recent_manifest' + order_id).hide();
},
success: function(data) {
    $('#recent_manifest' + order_id).show();
    $('#recent_manifest' + order_id).html(data);
},
complete: function() {
    $('#loader' + order_id).html('');
},
});
}
</script>

<script>
$("#checkAll").click(function() {
$('input:checkbox').not(this).prop('checked', this.checked);
});

// Filter daerah section

$(document).ready(function() {
if ($('#provinces').val() != '') {
var province = $('#provinces').find(':selected').attr('data-id');
$.ajax({
    url: 'https://dashboard.sellerkit.id/order/filter_territory/kota',
    method: 'post',
    data: {
        province_id: province
    },
    success: function(msg) {
        $("#kota").html(msg);
        // $("img#load1").hide();
        // getKecamatan();

        
    }
});
}

function setKecamatan(regency_id) {
$.ajax({
    url: 'https://dashboard.sellerkit.id/order/filter_territory/kecamatan',
    method: 'post',
    data: {
        regencies_id: regency_id
    },
    success: function(msg) {
        // alert(id_re);
        $("#kecamatan").html(msg);
        // $("img#load1").hide();
        // getKelurahan();
                        }
});
}

function setKelurahan(district_id) {
$.ajax({
    url: 'https://dashboard.sellerkit.id/order/filter_territory/kelurahan',
    method: 'post',
    data: {
        district_id: district_id
    },
    success: function(msg) {
        // alert(id_re);
        $("#kelurahan").html(msg);
        // $("img#load1").hide();
        // getKelurahan();
                        }
});
}

});

$("#provinces").change(function() {
// $("img#load1").show();
var id_provinces = $(this).find(':selected').attr('data-id');
$.ajax({
url: 'https://dashboard.sellerkit.id/order/filter_territory/kota',
method: 'post',
data: {
    province_id: id_provinces
},
success: function(msg) {
    $("#kota").html(msg);
    // $("img#load1").hide();
    getKecamatan();
}
});
});

$("#kota").change(function() {
var id_regencies = $('#kota').find(':selected').attr('data-id');
$.ajax({
url: 'https://dashboard.sellerkit.id/order/filter_territory/kecamatan',
method: 'post',
data: {
    regencies_id: id_regencies
},
success: function(msg) {
    // alert(id_re);
    $("#kecamatan").html(msg);
    // $("img#load1").hide();
    getKelurahan();
}
});
});

function getKecamatan() {
var id_regencies = $('#kota').find(':selected').attr('data-id');
$.ajax({
url: 'https://dashboard.sellerkit.id/order/filter_territory/kecamatan',
method: 'post',
data: {
    regencies_id: id_regencies
},
success: function(msg) {
    // alert(id_re);
    $("#kecamatan").html(msg);
    // $("img#load1").hide();
    getKelurahan();
                }
});
}

$("#kecamatan").change(function() {
var id_district = $('#kecamatan').find(':selected').attr('data-id');
$.ajax({
url: 'https://dashboard.sellerkit.id/order/filter_territory/kelurahan',
method: 'post',
data: {
    district_id: id_district
},
success: function(msg) {
    $("#kelurahan").html(msg);
    // $("img#load1").hide();
    // getAjaxKota();
}
});
});

function getKelurahan() {
var id_district = $('#kecamatan').find(':selected').attr('data-id');
$.ajax({
url: 'https://dashboard.sellerkit.id/order/filter_territory/kelurahan',
method: 'post',
data: {
    district_id: id_district
},
success: function(msg) {
    $("#kelurahan").html(msg);
    // $("img#load1").hide();
}
});
}

// End section
</script>                </div>
</main>

@endsection
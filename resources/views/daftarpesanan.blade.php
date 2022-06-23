@extends('layouts.index')

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

<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <option value="1">JNE</option><option value="2">JNT</option><option value="3">SICEPAT</option><option value="4">ANTERAJA</option><option value="5">SHOPEE_EXPRESS</option><option value="6">GOSEND</option><option value="7">NINJA</option><option value="8">LAZADA_EXPRESS</option><option value="9">GOJEK</option><option value="10">GRAB</option><option value="11">INDAH</option><option value="12">POS</option><option value="13">LELEXPRESS</option><option value="14">LION_PARCEL</option><option value="15">PAHALA_EXPRESS</option><option value="16">TIKI_EXPRESS</option><option value="17">WAHANA</option>                            </select>
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
                    <option value="order_invoice">Invoice</option><option value="product_name">Nama Produk</option><option value="product_sku">Kode SKU</option><option value="order_resi">Resi Order</option><option value="customer_name">Nama Pembeli</option><option value="customer_phone">Telepon Pembeli</option><option value="receipent">Nama Penerima</option>                            </select>
                <input type="text" name="keyword" id="search_key" class="form-control form-control-md" value="" placeholder="Cari">
            </div>
        </div>
        <div class="col-md-4">
            <select name="channel" class="form-select">
                <option value="">Channel</option>
                <option value="1">Shopee</option><option value="2">Lazada</option><option value="3">Tokopedia</option><option value="4">Bukalapak</option><option value="5">Tiktok</option><option value="6">Offline</option><option value="7">Whatsapp</option>                            <!-- <option value="1">Channel</option> -->
            </select>
        </div>
        <div class="col-md-4">
            <select name="shop" class="form-select">
                <option value="">Toko</option>
                <option value="4">Toko_admin</option><option value="5">Gegegege</option><option value="7">Tokosales_</option><option value="8">Toko_tokped</option><option value="9">Toko_lazada</option><option value="32">Haha</option><option value="34">Galang1212</option>                        </select>
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
<form action="https://dashboard.sellerkit.id/order" method="post" accept-charset="utf-8">
<div class="row">
<div class="col-12" id="mass_action" style="display: none;">

<input type="hidden" name="query" value="">
<div class="modal fade" id="modalMassNote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header bg-white">
            <h5 class="modal-title" id="exampleModalLabel">Tambahkan catatan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p class="orders-checked mb-3"><i class="fa fa-check-circle" aria-hidden="true"></i> 10 Pesanan dipilih</p>
            <div>
                <textarea name="order_note" id="order_note" cols="30" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button formaction="https://dashboard.sellerkit.id/order/mass-order-note" class="btn btn-light">Tambahkan</button>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modalMassCancel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-body text-center">
            <i class="fa fa-exclamation-circle fa-8x my-4 text-warning" aria-hidden="true"></i>
            <h5 class="text-muted orders-checked"></h5>
            <h4 class="mb-1">Pesanan yang sudah dibatalkan akan dihapus. Lanjutkan?</h4>
            <div class="alert alert-warning mb-3">
                <div class="alert-message">
                    Pesanan dengan status "Stok terpenuhi" dan "Sudah dikemas" harus mendapatkan izin packing terlebih dahulu agar bisa dihapus
                </div>
            </div>

            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
            <button formaction="https://dashboard.sellerkit.id/order/mass-cancel-order" class="btn btn-light">Lanjutkan</button>
        </div>
    </div>
</div>
</div>

<div class="card mb-3">
<div class="card-body">
    <button type="button" data-bs-toggle="modal" data-bs-target="#modalMassNote" class="btn btn-light print-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Tambah catatan</button>
    <button type="button" data-bs-toggle="modal" data-bs-target="#modalMassCancel" class="btn btn-light print-button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Batalkan pesanan</button>
</div>
</div>
</div>

<div class="col-12">
<ul class="nav nav-pills sk-tab">
<li class="nav-item">
    <a href="?status=all_orders" class="nav-link ">Semua pesanan <span class="badge bg-danger rounded-pill">10</span></a>
</li>
<li class="nav-item">
    <a href="?status=today_orders" class="nav-link active">Hari ini <span class="badge bg-danger rounded-pill">1</span></a>
</li>
<li class="nav-item">
    <a href="?status=pending_orders" class="nav-link ">Tertunda <span class="badge bg-danger rounded-pill">4</span></a>
</li>
<li class="nav-item">
    <a href="?status=processed_orders" class="nav-link ">Diproses <span class="badge bg-danger rounded-pill">5</span></a>
</li>
<li class="nav-item">
    <a href="?status=delivered_orders" class="nav-link ">Terkirim <span class="badge bg-danger rounded-pill">1</span></a>
</li>
<li class="nav-item">
    <a href="?status=received_orders" class="nav-link ">Diterima </a>
</li>
<li class="nav-item">
    <a href="?status=cancelled_orders" class="nav-link ">Dibatalkan </a>
</li>
</ul>

<div class="card">
<div class="card-body">
    <div class="table-responsive">
                                <table class="table bg-white table-found" id="orders_table">
                <thead>
                    <tr>
                        <th class="pb-0 px-0" style="min-width: 200px">
                            <div class="d-flex pb-1" style="border-right: 1px solid #ddd">
                                <div class="p-2">
                                    <input class="form-check-input all-orders" type="checkbox" value="">
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
                        <th>Status Pesanan</th>
                        <th>Waktu</th>
                        <th>Kurir</th>
                        <th>Status Pengiriman</th>
                        <th style="min-width: 150px">Catatan</th>
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
                                    <div class="p-2 flex-fill flex-shrink-1">
                                        <input class="form-check-input" name="orders[]" type="checkbox" value="181" id="flexCheckDefault">
                                    </div>
                                    <div class="p-2 flex-fill flex-grow-1">
                                        <p class="mb-1">testpostalcode123</p>
                                        <p class="mb-1">23 Jun 2022 : 08.57</p>
                                        <p class="mb-1 text-muted">Tertunda</p>
                                        <p class="mb-1"><i class="fa fa-user" aria-hidden="true"></i> Galang Buana 2</p>
                                        <p class="mb-1"><i class="fa fa-shopping-bag" aria-hidden="true"></i> toko_admin</p>
                                                                                        </div>
                                </div>

                            </td>
                            <td class="align-top">
                                <p class="mb-1">Galang</p>
                                <p class="mb-1">6285156641115</p>
                                <p class="mb-1">Gundih,Surabaya</p>
                            </td>
                            <td class="align-top text-wrap" style="min-width: 300px">
                                                                                <div class="d-flex">
                                        <div class="flex-shrink-0 p-2 pt-0">
                                            <img class="product-lg img-fluid img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg">
                                        </div>
                                        <div class="flex-grow-1 p-2 pt-0">
                                            <p class="mb-1"><b>Shampoo</b></p>
                                            <p class="text-muted">Rp5.000 x 1</p>
                                        </div>
                                    </div>
                                                                                <div class="d-flex">
                                        <div class="flex-shrink-0 p-2 pt-0">
                                            <img class="product-lg img-fluid img-thumbnail" src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg">
                                        </div>
                                        <div class="flex-grow-1 p-2 pt-0">
                                            <p class="mb-1"><b>Beard Serum</b></p>
                                            <p class="text-muted">Rp2.000 x 1</p>
                                        </div>
                                    </div>
                                                                        </td>
                            <td class="align-top">Rp7.000</td>
                            <td class="align-top text-wrap" style="min-width: 300px">
                                                                        </td>


                            <td class="align-top">
                                                                                    <p class="mb-1"><i class="fa fa-check text-success" aria-hidden="true"></i> Rekap order</p>
                                                                                        <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Stock ready</p>
                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Cetak label pengiriman</p>
                                                                                    <p class="mb-1"><i class="fa fa-times text-danger" aria-hidden="true"></i> Sudah dikemas</p>
                                                                        </td>
                            <td class="align-top">
                                                                                    <p class="mb-1">23 Jun 2022 : 08.57</p>
                                <p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p><p class="mb-1">&nbsp;</p>
                                <!-- <p class="mb-1">09 Mar 2022 : 18.21</p> -->
                            </td>
                            <td class="align-top">
                                <p class="mb-1">ANTERAJA</p>
                                <p class="mb-1">resi222000</p>
                            </td>
                            <td class="align-top">
                                <div class="loader181"></div>
                                <div class="recent_manifest181" style="background: #eee">
                                    <div class="mb-2 text-center p-3">Belum ada data terbaru.</div>                                            </div>
                                <div class=" d-grid gap-2">
                                    <button onclick="updateWaybill(181)" class="btn btn-light">Update Status Pengiriman</button>
                                    <button onclick="trackWaybill(181)" data-bs-toggle="modal" data-bs-target="#ModalTrack" class="btn btn-light">Lacak AWB / Resi</button>
                                </div>
                            </td>
                            <td class="align-top"></td>
                            <td class="align-top px-0 py-0 border-left">
                                <div class="d-flex">
                                    <div class="p-2">
                                        <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#OrderNote181" class="text-dark btn btn-light">Catatan operasi</a></p>
                                                                                            <p class="mb-1"><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#CancelOrder181" class="text-danger btn btn-light ">Batal order</a></p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                                                </tbody>
            </table>
                        </div>
    <div class="my-3">
                        </div>
</div>
</div>
</div>
</div>
</form>
<form action="https://dashboard.sellerkit.id/order/add_order_note" method="post" accept-charset="utf-8">

<input type="hidden" name="order_id" value="181">
<div class="modal fade" id="OrderNote181" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<input type="hidden" name="order_id" value="181">
<div class="modal fade" id="CancelOrder181" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<input type="hidden" name="order_id" value="121">
<div class="modal fade" id="OrderNote121" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<input type="hidden" name="order_id" value="121">
<div class="modal fade" id="CancelOrder121" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<input type="hidden" name="order_id" value="120">
<div class="modal fade" id="OrderNote120" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<input type="hidden" name="order_id" value="120">
<div class="modal fade" id="CancelOrder120" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<input type="hidden" name="order_id" value="122">
<div class="modal fade" id="OrderNote122" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<input type="hidden" name="order_id" value="122">
<div class="modal fade" id="CancelOrder122" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</form>
<div class="modal fade" id="ModalTrack" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header" style="border-bottom: 0px">
    <h5 class="modal-title" id="exampleModalLabel">Lacak Resi / AWB</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="loader">
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
    $('.loader').show(); // Assuming that you have some loader defined
    updateWaybill(order_id);
},
success: function(data) {
    $('#track_container').show();
    $('#track_container').html(data);
},
complete: function() {
    $('.loader').hide(); //Hide this loader
},
});
}

function updateWaybill(order_id) {
$.ajax({
url: 'https://dashboard.sellerkit.id/order/update_waybill/' + order_id,
method: 'post',
beforeSend: function() {
    $('.loader' + order_id).html(
        '<div class="d-flex justify-content-center">' +
        '<div class = "spinner-border my-3" role="status">' +
        '<span class = "visually-hidden" > Loading... < /span>' +
        '</div>' +
        '</div>'
    );
    $('.recent_manifest' + order_id).hide();
},
success: function(data) {
    $('.recent_manifest' + order_id).show();
    $('.recent_manifest' + order_id).html(data);
},
complete: function() {
    $('.loader' + order_id).html('');
},
});
}
</script>

<script>
$(document).ready(function() {
// Check/Uncheck ALl
$('.all-orders').change(function() {
if ($(this).is(':checked')) {
    $('input[name="orders[]"]').prop('checked', true);

    var total_checkboxes_checked = $('input[name="orders[]"]:checked').length;
    $('.orders-checked').html(total_checkboxes_checked + ' pesanan dipilih');
} else {
    $('input[name="orders[]"]').each(function() {
        $(this).prop('checked', false);
    });
}
});

// Checkbox click
$('input[name="orders[]"]').click(function() {
var total_checkboxes = $('input[name="orders[]"]').length;
var total_checkboxes_checked = $('input[name="orders[]"]:checked').length;

$('.orders-checked').html(total_checkboxes_checked + ' pesanan dipilih');

if (total_checkboxes_checked == total_checkboxes) {
    $('.all-orders').prop('checked', true);
} else {
    $('.all-orders').prop('checked', false);
}
});
});

$(document).ready(function() {
var mass_action = $("#mass_action");
mass_action.hide();

var cbs = $('input:checkbox').change(function() {
if (cbs.is(':checked')) {
    mass_action.show();
} else {
    mass_action.hide();
}
});
});
</script>

<script>
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
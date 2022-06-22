@extends('layouts.index')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="h3">Tambah Hadiah</h1>
        </div>
        <div class="row">
            <div class="m-sm-0">
                <form action="create-brand" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-7 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title"><i data-feather="info"></i> Informasi Produk</h5>
                                </div>
                                <div class="card-body">

                                    <div class="mb-3">
                                        <label class="form-label">Gambar Produk</label>
                                        <input class="form-control form-control-lg" type="file" name="pic" value="" required />
                                        <div class="invalid-feedback">
                                            <!-- fail massage -->
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nama Produk</label>
                                        <input class="form-control form-control-lg " type="text" name="gift_name" value="" required />
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row no-gutters mb-3">
                                        <div class="col-6">
                                            <label class="form-label">Harga produk</label>
                                            <input class="form-control form-control-lg" type="number" name="gift_price" value="" min="1" required />
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label">Harga jual produk</label>
                                            <input class="form-control form-control-lg" type="number" name="sale_price" min="1" value="" required />
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Deskripsi Produk</label>
                                        <textarea class="form-control form-control-lg" type="text" rows="5" name="gift_desc"></textarea>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title"><i data-feather="box"></i> Stok Awal</h5>
                                </div>
                                <div class="card-body">
                                    <div id="satuan">
                                        <div id="product_warehouse" class="mb-3">
                                            @foreach($temps as $t)
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <h5>{{ $t->nama_gudang }}</h5>
                                                    <a href="javascript:void(0)" onclick="deleteWarehouse(<?= $t->stock_id ?>)" style="text-decoration: none" class="text-danger">Hapus</a>
                                                </div>
                                                <div class="input-group">
                                                    <input type="number" name="product_stock[]" value="{{ $t->stock_qty }}" class="form-control form-control-lg">
                                                    <div class="input-group-text">
                                                        pcs
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="button" data-bs-toggle="modal" class="btn btn-light" data-bs-target="#ModalGudang"><i class="fa fa-plus"></i> Tambah gudang</button>
                                    </div>
                                </div>

                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalGudang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h5 class="modal-title" id="exampleModalLabel">Pilih gudang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="warehouse_form">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-12">
                                <select id="warehouse" name="warehouse" class="form-select">
                                    @foreach($warehouse as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_gudang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="number" name="stock_qty" id="stock_qty" placeholder="Stok awal" class="form-control">
                                    <div class="input-group-text">
                                        pcs
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-secondary" id="warehouse_add">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    var modalGudang = new bootstrap.Modal(document.getElementById('ModalGudang'));

    function showWarehouse() {
        $.ajax({
            url: '/show-gift-temp',
            method: 'get',
            success: function(data) {
                $('#product_warehouse').html(data);
                modalGudang.hide();
                // alert('success');
            }
        });
    }

    // showWarehouse();

    $('#warehouse_add').click(function() {
        var warehouse = $('#warehouse_form').serialize();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/add-gift-temp',
            method: 'post',
            data: warehouse,
            success: function(data) {
                showWarehouse();
                modalGudang.hide();
            },
            error: function() {
                alert('error');
            }
        });
    });

    function deleteWarehouse(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "/delete-gift-temp",
            method: 'post',
            data: {
                stock_id: id,
            },
            success: function(data) {
                showWarehouse();
            }
        });
    }
</script>
@endsection
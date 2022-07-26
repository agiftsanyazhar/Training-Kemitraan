@extends('layouts.index')

@section('container')
<!-- testimoni -->
<div class="row">
    <div class="col-12 col-xxl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h5 class="card-title mb-0">Daftar Barang</h5>
            </div>
            <div class="card-body">
                <div class="row gy-3">
                    <div class="col-12 col-md-11">
                        <div class="input-group">
                            <div class="input-group-append">
                                <select name="search" id="search" class="form-select">
                                    <option value="">ID</option>
                                    <option value="">Nama Barang</option>
                                    <option value="">Stok</option>
                                    <option value="">Kategori</option>
                                </select>
                            </div>
                            <input type="search" name="keyword" id="keyword" placeholder="Cari" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-12 col-md-1">
                        <button type="submit" class="btn btn-secondary">Cari</button>
                    </div>
                    <div class="col-12">
                        <span class="mr-3">ID:
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
                                        <th>ID</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Kategori</th>
                                        <th class="border-left">
                                            <div class="d-flex">Aksi</div>
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
                                            K8721
                                        </td>
                                        <td class="align-top">
                                            Garnier Men
                                        </td>
                                        <td class="align-top">
                                            Rp50.000
                                        </td>
                                        <td class="align-top">
                                            49
                                        </td>
                                        <td class="align-top">
                                            Face Wash
                                        </td>
                                        <td class="align-top border-left">
                                            <div class="d-flex">
                                                <div class="d-inline">
                                                    <a href="{{ url ('/') }}" class="text-info"><i class="align-middle" data-feather="eye"></i></a>
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

@endsection
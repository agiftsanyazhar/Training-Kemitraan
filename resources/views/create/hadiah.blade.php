@extends('layouts.index')

@section('container')
<main class="content">
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="h3">Tambah Hadiah</h1>
        </div>
        <div class="row">
            <div class="m-sm-0">
                <form id="warehouse_form" action="create-brand" method="POST">
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
                                        <input class="form-control form-control-lg @error('pic') is-invalid @enderror" type="file" name="pic" value="{{ old('pic') }}" required />
                                        @error('pic')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Nama Produk</label>
                                        <input class="form-control form-control-lg @error('gift_name') is-invalid @enderror" type="text" name="gift_name" placeholder="Masukkan nama produk" value="{{ old('gift_name') }}" required />
                                        @error('gift_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="row no-gutters mb-3">
                                        <div class="col-6">
                                            <label class="form-label">Harga Produk</label>
                                            <input class="form-control form-control-lg @error('gift_price') is-invalid @enderror" type="number" name="gift_price" placeholder="Masukkan harga produk" value="{{ old('gift_price') }}" min="1" required />
                                            @error('gift_price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label">Harga Jual Produk</label>
                                            <input class="form-control form-control-lg @error('sale_price') is-invalid @enderror" type="number" name="sale_price" placeholder="Masukkan harga jual produk" value="{{ old('sale_price') }}" min="1" required />
                                            @error('sale_price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <select class="form-select" name="field_name1[]">
                                                @foreach($warehouse as $data)
                                                <option>{{ $data->nama_gudang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="text" class="form-control" name="field_name[]" value="" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon1">pcs</span>
                                    </div>
                                    <div id="satuan">
                                        <div class="field_wrapper">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="javascript:void(0);"  class="add_button btn btn-light" title="Add field">Tambah Gudang</a>
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
            <div class="modal fade" id="ModalGudang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header bg-white">
                            <h5 class="modal-title" id="exampleModalLabel">Pilih gudang</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
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
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var modalGudang = new bootstrap.Modal(document.getElementById('ModalGudang'));

                function showWarehouse() {
                    $.ajax({
                        url: "{{ url('/HT') }}",
                        method: 'get',
                        data: {
                            act: 'show'
                        },
                        success: function(data) {
                            $('#product_warehouse').html(data);
                            // modalGudang.hide();
                        }
                    });
                }

                showWarehouse();

                $('#warehouse_add').click(function() {
                    var warehouse = $('#warehouse_form').serialize();

                    $.ajax({
                        url: "{{ url('/HTadd') }}",
                        method: 'post',
                        data: warehouse,
                        success: function(data) {
                            modalGudang.hide();
                            showWarehouse();
                        }
                    });
                });

                function deleteWarehouse() { //param id
                    $.ajax({
                        url: "{{ url('/HTdelete') }}",
                        method: 'post',
                        data: {
                            temp_id: id,
                            act: 'delete'
                        },
                        success: function(data) {
                            showWarehouse();
                        }
                    });
                }
            </script>
            <script type="text/javascript">
            $(document).ready(function(){
                var maxField = 100; //Input fields increment limitation
                var addButton = $('.add_button'); //Add button selector
                var wrapper = $('.field_wrapper'); //Input field wrapper 
                var fieldHTML = '<div class="input-group mb-3"><div class="input-group-append"><select class="form-select" name="field_name1[]">@foreach($warehouse as $data)<option>{{ $data->nama_gudang }}</option>@endforeach</select></div><input type="text" class="form-control" aria-describedby="basic-addon2" name="field_name[]" value=""/><span class="input-group-text" id="basic-addon1">pcs</span>&nbsp &nbsp &nbsp<a href="javascript:void(0);" class="remove_button btn btn-danger">remove</a></div>'; //New input field html 
                var x = 1; //Initial field counter is 1
                
                //Once add button is clicked
                $(addButton).click(function(){
                    //Check maximum number of input fields
                    if(x < maxField){ 
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); //Add field html
                    }
                });
                
                //Once remove button is clicked
                $(wrapper).on('click', '.remove_button', function(e){
                    e.preventDefault();
                    $(this).parent('div').remove(); //Remove field html
                    x--; //Decrement field counter
                });
            });
            </script>
        </div>
    </div>
</main>
@endsection
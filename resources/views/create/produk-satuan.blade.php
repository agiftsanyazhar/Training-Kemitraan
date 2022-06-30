@extends('layouts.index')

@section('container')
	<main class="content">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="m-sm-0">
                    <form id="warehouse_form" action="create-produk" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0"><i data-feather="info"></i> Informasi {{ $title }}</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Gambar Produk</label>
                                            <input class="form-control form-control-lg @error('gambar_produk') is-invalid @enderror" type="file" name="gambar_produk" value="{{ old('gambar_produk') }}" required />
                                            @error('gambar_produk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row no-gutters mb-3">
                                            <div class="col-6">
                                                <label class="form-label">Nama Produk</label>
                                                <input class="form-control form-control-lg @error('nama_produk') is-invalid @enderror" type="text" name="nama_produk" placeholder="Masukkan nama produk" value="{{ old('nama_produk') }}" min="1" required />
                                                @error('nama_produk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
    
                                            <div class="col-6">
                                                <label class="form-label">SKU Produk</label>
                                                <input class="form-control form-control-lg @error('sku_produk') is-invalid @enderror" type="text" name="sku_produk" placeholder="Masukkan SKU produk" value="{{ old('sku_produk') }}" min="1" required />
                                                @error('sku_produk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row no-gutters mb-3">
                                            <div class="col-6">
                                                <label class="form-label">Brand Produk</label>
                                                <select class="form-select @error('nama_brand') is-invalid @enderror" name="nama_brand" required>
                                                    <option value="" disabled selected hidden>Pilih brand</option>
                                                </select>
                                                @error('nama_brand')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
    
                                            <div class="col-6">
                                                <label class="form-label">Kategori Produk</label>
                                                <select class="form-select @error('id_kategori') is-invalid @enderror" name="id_kategori" required>
                                                    <option value="" disabled selected hidden>Pilih kategori</option>
                                                </select>
                                                @error('id_kategori')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row no-gutters mb-3">
                                            <div class="col-6">
                                                <label class="form-label">Harga Produk</label>
                                                <input class="form-control form-control-lg @error('hpp_produk') is-invalid @enderror" type="number" name="hpp_produk" placeholder="Masukkan harga produk" value="{{ old('hpp_produk') }}" min="1" required />
                                                @error('hpp_produk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
    
                                            <div class="col-6">
                                                <label class="form-label">Harga Jual Produk</label>
                                                <input class="form-control form-control-lg @error('het_produk') is-invalid @enderror" type="number" name="het_produk" placeholder="Masukkan harga jual produk" value="{{ old('het_produk') }}" min="1" required />
                                                @error('het_produk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Deskripsi Produk</label>
                                            <textarea class="form-control form-control-lg @error('deskrpsi_produk') is-invalid @enderror" type="text" rows="5" value="{{ old('deskrpsi_produk') }}" name="deskrpsi_produk" required></textarea>
                                            @error('deskrpsi_produk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
                                            <input type="number" class="form-control @error('field_name[]') is-invalid @enderror" name="field_name[]" value="{{ old('field_name[]') }}" aria-describedby="basic-addon2" required>
                                                @error('field_name[]')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            <span class="input-group-text" id="basic-addon1">pcs</span>
                                        </div>
                                        <div id="satuan">
                                            <div class="field_wrapper">
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <a href="javascript:void(0);"  class="add_button btn btn-light" title="Add field">Tambah Produk</a>
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
                    var fieldHTML = '<div class="input-group mb-3"><div class="input-group-append"><select class="form-select" name="field_name1[]">@foreach($warehouse as $data)<option>{{ $data->nama_gudang }}</option>@endforeach</select></div><input type="number" class="form-control @error('field_name[]') is-invalid @enderror" aria-describedby="basic-addon2" name="field_name[]" value="{{ old('field_name[]') }}" required/>@error('field_name[]')<div class="invalid-feedback">{{ $message }}</div>@enderror<span class="input-group-text" id="basic-addon1">pcs</span>&nbsp &nbsp &nbsp<a href="javascript:void(0);" class="remove_button btn btn-danger">Hapus</a></div>'; //New input field html 
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
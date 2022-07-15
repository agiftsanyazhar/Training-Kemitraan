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
                                                    @foreach ($brand as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_brand }}</option>
                                                    @endforeach
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
                                                    @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                                    @endforeach
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
                                        <div id="paket" style="">
                    
                                            <table class="table table-borderless">
                                                <tbody id="package_item"><tr>
                                                <td><img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" style="width: 60px"></td>
                                                <td>
                                                    <h6><b>Shampoo</b></h6>
                                                    
                                                    <input type="hidden" name="product_id[]" value="21">
                        
                                                    <div class="input-group">
                                                        <input type="number" class="form-control item-qty" name="product_qty[]" min="1" value="1">
                                                        <div class="input-group-text">
                                                            pcs
                                                        </div> &nbsp &nbsp 
                                                        <a href="#" class="remove_button btn btn-danger">Hapus</a>
                                                    </div>
                                                </td>
                                                
                                              </tr></tbody>
                                                {{--  <tfoot>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ModalPaket">
                                                                <div class="box text-secondary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus align-middle"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td colspan="3">
                                                            <h5><b>PRODUK</b></h5>
                                                            Pilih produk yang akan dijadikan paket
                                                        </td>
                                                    </tr>
                                                </tfoot>  --}}
                                            </table>
                                        </div>
                                        <div id="satuan">
                                            <div class="field_wrapper">
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <a href="#staticBackdrop" data-bs-toggle="modal" class=" btn btn-light">Tambah Produk</a>
                                        </div>

                                        
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Jenis Produk</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                   
                                            <table class="table table-borderless">

                                                <tbody><tr>
                                                            <td><img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_kNgRQeAT.jpg" class="img-thumbnail" width="60px"></td>
                                                            <td>
                                                                <span>Shampoo</span>
                                                            </td>
                                                            <td><a href="javascript:void(0)" onclick="addItem(21)" class="btn btn-light btn-add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></a></td>
                                                        </tr><tr>
                                                            <td><img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_5HDJpqMO.jpg" class="img-thumbnail" width="60px"></td>
                                                            <td>
                                                                <span>Beard Serum</span>
                                                            </td>
                                                            <td><a href="javascript:void(0)" onclick="addItem(24)" class="btn btn-light btn-add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></a></td>
                                                        </tr><tr>
                                                            <td><img src="https://dashboard.sellerkit.id/assets/img/products/SK_PRODUCT_QVs5XUHC.png" class="img-thumbnail" width="60px"></td>
                                                            <td>
                                                                <span>Test002</span>
                                                            </td>
                                                            <td><a href="javascript:void(0)" onclick="addItem(121)" class="btn btn-light btn-add"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></a></td>
                                                            </tr>
                                                        </tbody></table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                            </div>
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
@extends('layouts.app')

@section('content')
<section  id="app">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> </a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-sm-4">
                <div class="info-box form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-4 control-label text-left">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kasir" class="col-sm-4 control-label text-left">Kasir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="member" class="col-sm-4 control-label text-left">Member</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="info-box form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="barcode" class="col-sm-4 control-label text-left">Barcode</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <input type="text" v-model="popupSearch" class="form-control" placeholder="Find Product">
                                    <span class="btn input-group-addon btn-primary" v-on:click="getBarang()" data-toggle="modal" data-target=".product"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputQty" class="col-sm-4 control-label text-left">Qty</label>
                            <div class="col-sm-8">
                                <input type="text" v-model="qty" class="form-control" placeholder="Jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <button v-if="addData" v-on:click="addCart()" class="btn btn-primary">Add</button>
                                <button v-if="editData" v-on:click="updated()" class="btn btn-info">Save</button>
                                <button v-if="editData" v-on:click="batalEdit()" class="btn btn-danger">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="info-box form-horizontal">
                    <div class="box-body payment-price">
                        <p>Unique Visitors</p>
                        <h1>65</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Barcode</th>
                        <th>Product Item</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Discount Item</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in cart">
                        <td>@{{ item.no }}</td>
                        <td>@{{item.code}}</td>
                        <td>@{{item.nama}}</td>
                        <td>@{{item.harga}}</td>
                        <td>@{{item.qty}}</td>
                        <td>-</td>
                        <td>@{{item.total}}</td>
                        <td>
                            <button class="btn btn-primary" v-on:click="detail(index)"><i class="fa fa-pencil"></i> Update</button>
                            <button class="btn btn-danger" v-on:click="deleted(index)"><i class="fa fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="info-box form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="subtotal" class="col-sm-5 control-label text-left">Sub Total</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="subtotal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="discount" class="col-sm-5 control-label text-left">Discount</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="discount">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="grandtotal" class="col-sm-5 control-label text-left">Grand Total</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="grand total">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="info-box form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label text-left">Cash</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label text-left">Change</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="info-box form-horizontal">
                    <div class="box-body payment-price">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label text-left">Note</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="info-box form-horizontal">
                    <div class="box-body">
                        <button type="button" class="mb-1 btn btn-warning btn-block"><i class="fa fa-pencil"></i> Cancel</button>
                        <button type="button" class="mb-1 btn btn-success btn-block"><i class="fa fa-pencil"></i> Process Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade product" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label>Search</label>
                        <input type="text" v-model="popupSearch" v-on:change="search">
                    </div>
                </div>
                <div v-if="produk != null">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Barcode</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in produk.data">
                                <td>@{{ item.code }}</td>
                                <td>@{{ item.nama }}</td>
                                <td>@{{ item.harga }}</td>
                                <td>@{{ item.stok }}</td>
                                <td>
                                    <button class="btn btn-active" data-dismiss="modal" v-on:click="pick(index)">Pilih</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item" v-bind:class="{ active: produk.prev_page_url != null }">
                            <a class="page-link" v-on:click="nextPrev(produk.prev_page_url)" href="javscript:void(0)" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                            <li class="page-item" v-bind:class="{ active: produk.next_page_url != null }">
                                <a class="page-link" v-on:click="nextPrev(produk.next_page_url)" href="javscript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@push('scripts')

    <script type="text/javascript">
    $('#table_id').DataTable();
    var app = new Vue({
            el: '#app',
            data: {
                pickItem:null,
                cart:[],
                produk: null,
                popupSearch : "",
                popupSearchId : null,
                qty:null,
                editData:false,
                addData:true
            },
            mounted: function() { 

            },
            created() {
                
            },
            destroyed() {
                
            },
            methods:{
                pick(key){
                    var pick = app.produk.data[key]
                    app.pickItem = pick
                    app.popupSearch = pick.nama
                    app.popupSearchId = pick.id
                },
                addCart(edit){
                    if(app.pickItem != null && app.qty > 0){
                        var cart = app.cart;
                        app.pickItem['no'] = cart.length + 1
                        app.pickItem['qty'] = app.qty
                        app.pickItem['total'] = app.qty * app.pickItem['harga']
                        var list = cart.some(value => value.id === app.popupSearchId);

                        if(list == false){
                            cart.push(app.pickItem)
                        }else{
                            cart.forEach((val, index) => {
                                var qtyDef = val.qty
                                var priceDef = Number(val.harga)
                                if(!edit){
                                    cart[index]['qty'] = val.id == app.popupSearchId ? Number(qtyDef) + Number(app.qty) : Number(qtyDef)
                                    cart[index]['total'] = val.id == app.popupSearchId ? priceDef * (Number(qtyDef) + Number(app.qty)) : priceDef
                                }else{
                                    cart[index]['qty'] = val.id == app.popupSearchId ? Number(app.qty) : Number(qtyDef)
                                    cart[index]['total'] = val.id == app.popupSearchId ? priceDef * + Number(app.qty) : priceDef
                                }
                                
                            });
                            app.cart = cart
                        }

                        app.pickItem = null
                        app.popupSearch  = null
                        app.qty = null
                    }
                 
                },
                batalEdit(){
                    app.pickItem = null
                    app.popupSearch  = null
                    app.qty = null
                    app.editData = false
                    app.addData = true
                },
                detail(index){
                    var cart = app.cart;
                    var edited = cart[index]
                    app.pickItem = edited
                    app.popupSearch = edited.nama
                    app.popupSearchId = edited.id
                    app.qty = edited.qty
                    app.editData = true
                    app.addData = false
                    console.log(edited);
                },
                updated(){
                    this.addCart(true);
                    app.editData = false
                    app.addData = true
                },
                deleted(index){
                    var cart = app.cart;
                    cart.splice(index, 1);
                    cart.forEach((val, index) => {
                        cart[index]['no'] = index + 1
                    })
                    app.cart = cart;
                },
                search(){
                    this.getBarang()
                },
                nextPrev(url){
                    if(url != null)
                        this.getBarang(url)
                },
                getBarang: function (url){
                    var dataUrl = url ? url : "{{ url('get-barang') }}";
                    if(app.popupSearch){
                        if(app.popupSearch.length >= 3 && !url){
                            dataUrl = dataUrl+'?search='+app.popupSearch
                        }
                    }

                    ajax({
                        method: 'GET',
                        url: dataUrl
                    }).then(function (response) {
                        app.produk = response.data
                        console.log(response.data.data)
                    }).catch(function (error) {
                        console.log(error)
                    })
                },
                
            },
            watch: {
            } 
        });
    $('#tanggal').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: true,
        sideBySide: true
    })
    $('#myModal').on('hidden.bs.modal', function (e) {
    // do something...
    })

</script>
@endpush


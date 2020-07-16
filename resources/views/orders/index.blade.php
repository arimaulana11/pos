@extends('layouts.app')

@section('content')
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
    <div class="content" id="app">
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
                                    <input type="text" class="form-control" placeholder="Find Product">
                                    <span class="btn input-group-addon btn-primary"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputQty" class="col-sm-4 control-label text-left">Qty</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Jumlah">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8">
                                <button class="btn btn-primary">Add</button>
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
                    <tr>
                        <td>1</td>
                        <td>0857875477</td>
                        <td>Antangin</td>
                        <td>23</td>
                        <td>5000</td>
                        <td>0</td>
                        <td>90000</td>
                        <td>
                            <button class="btn btn-primary">abc</button>
                            <button class="btn btn-primary">abc</button>
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
                            <label for="inputEmail3" class="col-sm-5 control-label text-left">Sub Total</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-5 control-label text-left">Discount</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-5 control-label text-left">Grand Total</label>
                            <div class="col-sm-7">
                                <input type="password" class="form-control" placeholder="Password">
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
                        <button type="button" class="mb-1 btn btn-primary btn-block">.btn-block</button>
                        <button type="button" class="mb-1 btn btn-primary btn-block">.btn-block</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')

    <script type="text/javascript">
    var app = new Vue({
            el: '#app',
            data: {
                    abc:'abc'
                }
            });
        $('#tanggal').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
        

    </script>
@endpush


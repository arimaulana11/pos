@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Order Detail
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($orderDetail, ['route' => ['orderDetails.update', $orderDetail->id], 'method' => 'patch']) !!}
                        <!-- Id Order Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('id_order', 'Id Order:') !!}
                            {!! Form::number('id_order', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Id Barang Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('id_barang', 'Id Barang:') !!}
                            {!! Form::number('id_barang', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Qty Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('qty', 'Qty:') !!}
                            {!! Form::number('qty', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('orderDetails.index') }}" class="btn btn-default">Cancel</a>
                        </div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
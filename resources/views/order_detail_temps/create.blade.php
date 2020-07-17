@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Order Detail Temp
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'orderDetailTemps.store']) !!}

                        @include('order_detail_temps.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

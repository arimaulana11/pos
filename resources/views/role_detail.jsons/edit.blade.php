@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Role Detail.json
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($roleDetail.json, ['route' => ['roleDetail.jsons.update', $roleDetail.json->id], 'method' => 'patch']) !!}

                        @include('role_detail.jsons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
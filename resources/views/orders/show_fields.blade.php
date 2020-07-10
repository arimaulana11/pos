<!-- Id User Field -->
<div class="form-group">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{{ $order->id_user }}</p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{{ $order->tanggal }}</p>
</div>

<!-- Id Company Field -->
<div class="form-group">
    {!! Form::label('id_company', 'Id Company:') !!}
    <p>{{ $order->id_company }}</p>
</div>

<!-- Total Harga Field -->
<div class="form-group">
    {!! Form::label('total_harga', 'Total Harga:') !!}
    <p>{{ $order->total_harga }}</p>
</div>

<!-- Total Qty Field -->
<div class="form-group">
    {!! Form::label('total_qty', 'Total Qty:') !!}
    <p>{{ $order->total_qty }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $order->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $order->updated_at }}</p>
</div>


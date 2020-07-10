<!-- Id Order Field -->
<div class="form-group">
    {!! Form::label('id_order', 'Id Order:') !!}
    <p>{{ $orderDetail->id_order }}</p>
</div>

<!-- Id Barang Field -->
<div class="form-group">
    {!! Form::label('id_barang', 'Id Barang:') !!}
    <p>{{ $orderDetail->id_barang }}</p>
</div>

<!-- Qty Field -->
<div class="form-group">
    {!! Form::label('qty', 'Qty:') !!}
    <p>{{ $orderDetail->qty }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $orderDetail->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $orderDetail->updated_at }}</p>
</div>


<!-- Id Order Field -->
<div class="form-group">
    {!! Form::label('id_order', 'Id Order:') !!}
    <p>{{ $orderDetailTemp->id_order }}</p>
</div>

<!-- Id Barang Field -->
<div class="form-group">
    {!! Form::label('id_barang', 'Id Barang:') !!}
    <p>{{ $orderDetailTemp->id_barang }}</p>
</div>

<!-- Qty Field -->
<div class="form-group">
    {!! Form::label('qty', 'Qty:') !!}
    <p>{{ $orderDetailTemp->qty }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $orderDetailTemp->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $orderDetailTemp->updated_at }}</p>
</div>


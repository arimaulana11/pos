<!-- Id Company Field -->
<div class="form-group">
    {!! Form::label('id_company', 'Id Company:') !!}
    <p>{{ $orderTemp->id_company }}</p>
</div>

<!-- Id User Field -->
<div class="form-group">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{{ $orderTemp->id_user }}</p>
</div>

<!-- Payment Code Field -->
<div class="form-group">
    {!! Form::label('payment_code', 'Payment Code:') !!}
    <p>{{ $orderTemp->payment_code }}</p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{{ $orderTemp->tanggal }}</p>
</div>

<!-- Subtotal Field -->
<div class="form-group">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    <p>{{ $orderTemp->subtotal }}</p>
</div>

<!-- Grand Total Field -->
<div class="form-group">
    {!! Form::label('grand_total', 'Grand Total:') !!}
    <p>{{ $orderTemp->grand_total }}</p>
</div>

<!-- Discount Field -->
<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    <p>{{ $orderTemp->discount }}</p>
</div>

<!-- Cash Field -->
<div class="form-group">
    {!! Form::label('cash', 'Cash:') !!}
    <p>{{ $orderTemp->cash }}</p>
</div>

<!-- Change Field -->
<div class="form-group">
    {!! Form::label('change', 'Change:') !!}
    <p>{{ $orderTemp->change }}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $orderTemp->note }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $orderTemp->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $orderTemp->updated_at }}</p>
</div>


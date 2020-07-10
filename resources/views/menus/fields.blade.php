<!-- Perent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('perent_id', 'Perent Id:') !!}
    {!! Form::text('perent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_company', 'Id Company:') !!}
    {!! Form::number('id_company', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('menus.index') }}" class="btn btn-default">Cancel</a>
</div>

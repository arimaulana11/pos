<!-- Id Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    {!! Form::number('id_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_role', 'Id Role:') !!}
    {!! Form::number('id_role', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_company', 'Id Company:') !!}
    {!! Form::number('id_company', null, ['class' => 'form-control']) !!}
</div>

<!-- Action Field -->
<div class="form-group col-sm-6">
    {!! Form::label('action', 'Action:') !!}
    {!! Form::text('action', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roleDetails.index') }}" class="btn btn-default">Cancel</a>
</div>

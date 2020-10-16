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

<!-- 'bootstrap / Toggle Switch Read Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('read', 'Read:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('read', 0) !!}
        {!! Form::checkbox('read', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Create Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('create', 'Create:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('create', 0) !!}
        {!! Form::checkbox('create', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Edit Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('edit', 'Edit:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('edit', 0) !!}
        {!! Form::checkbox('edit', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Delete Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('delete', 'Delete:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('delete', 0) !!}
        {!! Form::checkbox('delete', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roleDetails.index') }}" class="btn btn-default">Cancel</a>
</div>

<!-- Id Menu Field -->
<div class="form-group">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    <p>{{ $roleDetail->id_menu }}</p>
</div>

<!-- Id Role Field -->
<div class="form-group">
    {!! Form::label('id_role', 'Id Role:') !!}
    <p>{{ $roleDetail->id_role }}</p>
</div>

<!-- Read Field -->
<div class="form-group">
    {!! Form::label('read', 'Read:') !!}
    <p>{{ $roleDetail->read }}</p>
</div>

<!-- Create Field -->
<div class="form-group">
    {!! Form::label('create', 'Create:') !!}
    <p>{{ $roleDetail->create }}</p>
</div>

<!-- Edit Field -->
<div class="form-group">
    {!! Form::label('edit', 'Edit:') !!}
    <p>{{ $roleDetail->edit }}</p>
</div>

<!-- Delete Field -->
<div class="form-group">
    {!! Form::label('delete', 'Delete:') !!}
    <p>{{ $roleDetail->delete }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $roleDetail->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $roleDetail->updated_at }}</p>
</div>


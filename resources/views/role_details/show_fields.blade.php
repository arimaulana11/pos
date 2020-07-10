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

<!-- Id Company Field -->
<div class="form-group">
    {!! Form::label('id_company', 'Id Company:') !!}
    <p>{{ $roleDetail->id_company }}</p>
</div>

<!-- Action Field -->
<div class="form-group">
    {!! Form::label('action', 'Action:') !!}
    <p>{{ $roleDetail->action }}</p>
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


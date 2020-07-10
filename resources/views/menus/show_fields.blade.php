<!-- Perent Id Field -->
<div class="form-group">
    {!! Form::label('perent_id', 'Perent Id:') !!}
    <p>{{ $menu->perent_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $menu->name }}</p>
</div>

<!-- Link Field -->
<div class="form-group">
    {!! Form::label('link', 'Link:') !!}
    <p>{{ $menu->link }}</p>
</div>

<!-- Id Company Field -->
<div class="form-group">
    {!! Form::label('id_company', 'Id Company:') !!}
    <p>{{ $menu->id_company }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $menu->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $menu->updated_at }}</p>
</div>


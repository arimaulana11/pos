<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $company->nama }}</p>
</div>

<!-- No Telp Field -->
<div class="form-group">
    {!! Form::label('no_telp', 'No Telp:') !!}
    <p>{{ $company->no_telp }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $company->alamat }}</p>
</div>

<!-- Expired Field -->
<div class="form-group">
    {!! Form::label('expired', 'Expired:') !!}
    <p>{{ $company->expired }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $company->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $company->updated_at }}</p>
</div>


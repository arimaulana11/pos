<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- No Telp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_telp', 'No Telp:') !!}
    {!! Form::text('no_telp', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Expired Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expired', 'Expired:') !!}
    {!! Form::text('expired', null, ['class' => 'form-control','id'=>'expired']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#expired').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('companies.index') }}" class="btn btn-default">Cancel</a>
</div>

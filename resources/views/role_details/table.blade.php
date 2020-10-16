<div class="table-responsive">
    <table class="table" id="roleDetails-table">
        <thead>
            <tr>
                <th>Id Menu</th>
        <th>Id Role</th>
        <th>Read</th>
        <th>Create</th>
        <th>Edit</th>
        <th>Delete</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roleDetails as $roleDetail)
            <tr>
                <td>{{ $roleDetail->id_menu }}</td>
            <td>{{ $roleDetail->id_role }}</td>
            <td>{{ $roleDetail->read }}</td>
            <td>{{ $roleDetail->create }}</td>
            <td>{{ $roleDetail->edit }}</td>
            <td>{{ $roleDetail->delete }}</td>
                <td>
                    {!! Form::open(['route' => ['roleDetails.destroy', $roleDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roleDetails.show', [$roleDetail->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('roleDetails.edit', [$roleDetail->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

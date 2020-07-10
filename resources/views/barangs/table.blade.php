<div class="table-responsive">
    <table class="table" id="barangs-table">
        <thead>
            <tr>
                <th>Id Company</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Code</th>
        <th>Category</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->id_company }}</td>
            <td>{{ $barang->nama }}</td>
            <td>{{ $barang->harga }}</td>
            <td>{{ $barang->stok }}</td>
            <td>{{ $barang->code }}</td>
            <td>{{ $barang->category }}</td>
                <td>
                    {!! Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('barangs.show', [$barang->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('barangs.edit', [$barang->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="orderDetailTemps-table">
        <thead>
            <tr>
                <th>Id Order</th>
        <th>Id Barang</th>
        <th>Qty</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orderDetailTemps as $orderDetailTemp)
            <tr>
                <td>{{ $orderDetailTemp->id_order }}</td>
            <td>{{ $orderDetailTemp->id_barang }}</td>
            <td>{{ $orderDetailTemp->qty }}</td>
                <td>
                    {!! Form::open(['route' => ['orderDetailTemps.destroy', $orderDetailTemp->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orderDetailTemps.show', [$orderDetailTemp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orderDetailTemps.edit', [$orderDetailTemp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

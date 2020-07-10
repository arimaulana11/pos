<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Id User</th>
        <th>Tanggal</th>
        <th>Id Company</th>
        <th>Total Harga</th>
        <th>Total Qty</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id_user }}</td>
            <td>{{ $order->tanggal }}</td>
            <td>{{ $order->id_company }}</td>
            <td>{{ $order->total_harga }}</td>
            <td>{{ $order->total_qty }}</td>
                <td>
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$order->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orders.edit', [$order->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

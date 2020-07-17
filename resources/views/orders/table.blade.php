<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Id Company</th>
        <th>Id User</th>
        <th>Payment Code</th>
        <th>Tanggal</th>
        <th>Subtotal</th>
        <th>Grand Total</th>
        <th>Discount</th>
        <th>Cash</th>
        <th>Change</th>
        <th>Note</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id_company }}</td>
            <td>{{ $order->id_user }}</td>
            <td>{{ $order->payment_code }}</td>
            <td>{{ $order->tanggal }}</td>
            <td>{{ $order->subtotal }}</td>
            <td>{{ $order->grand_total }}</td>
            <td>{{ $order->discount }}</td>
            <td>{{ $order->cash }}</td>
            <td>{{ $order->change }}</td>
            <td>{{ $order->note }}</td>
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

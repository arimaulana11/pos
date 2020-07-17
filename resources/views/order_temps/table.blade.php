<div class="table-responsive">
    <table class="table" id="orderTemps-table">
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
        @foreach($orderTemps as $orderTemp)
            <tr>
                <td>{{ $orderTemp->id_company }}</td>
            <td>{{ $orderTemp->id_user }}</td>
            <td>{{ $orderTemp->payment_code }}</td>
            <td>{{ $orderTemp->tanggal }}</td>
            <td>{{ $orderTemp->subtotal }}</td>
            <td>{{ $orderTemp->grand_total }}</td>
            <td>{{ $orderTemp->discount }}</td>
            <td>{{ $orderTemp->cash }}</td>
            <td>{{ $orderTemp->change }}</td>
            <td>{{ $orderTemp->note }}</td>
                <td>
                    {!! Form::open(['route' => ['orderTemps.destroy', $orderTemp->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orderTemps.show', [$orderTemp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orderTemps.edit', [$orderTemp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

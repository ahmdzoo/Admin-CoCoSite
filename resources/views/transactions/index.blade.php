@extends('layout')

@section('content')
<h1>Transactions</h1>
<a href="{{ route('transactions.create') }}">Create New Transaction</a>

@if ($message = Session::get('success'))
    <div>{{ $message }}</div>
@endif

@if ($transactions->isEmpty())
    <p>No transactions found.</p>
@else
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product ID</th>
            <th>User ID</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
        @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->product_id }}</td>
                <td>{{ $transaction->user_id }}</td>
                <td>{{ $transaction->quantity }}</td>
                <td>{{ $transaction->total_price }}</td>
                <td>
                    <a href="{{ route('transactions.show', $transaction->id) }}">Show</a>
                    <a href="{{ route('transactions.edit', $transaction->id) }}">Edit</a>
                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endif
@endsection

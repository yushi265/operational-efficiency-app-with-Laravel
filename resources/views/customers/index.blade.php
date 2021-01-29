@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">性別</th>
                <th scope="col">年齢</th>
                <th scope="col">生年月日</th>
                <th scope="col">電話番号</th>
                <th scope="col">住所</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
            <tr>
                <th scope="row">{{ $customer->id }}</th>
                <td>
                    <a href="{{ url('/customers', $customer->id)}}">{{ $customer->name }}</a>
                </td>
                <td>{{ $customer->gender }}</td>
                <td>{{ $customer->age }}</td>
                <td>{{ $customer->birth }}</td>
                <td>{{ $customer->tel }}</td>
                <td>{{ $customer->address }}</td>
            </tr>
            @empty
            顧客がいません
            @endforelse
        </tbody>
</table>
<div class="paginate">
    <div class="page">
        {{ $customers->links() }}
    </div>
</div>
<a class="btn btn-outline-primary" href="{{ route('create') }}" role="button">追加</a>
</div>

@endsection

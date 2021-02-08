@extends('layouts.app')

@section('content')

<div class="container">
    <h4>顧客データベース　　　　個人|<a href="#">法人</a></h4>
    <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">名前</th>
                <th scope="col" class="text-center">性別</th>
                <th scope="col" class="text-center">年齢</th>
                {{-- <th scope="col">生年月日</th> --}}
                <th scope="col" class="text-center">電話番号</th>
                <th scope="col" class="text-center">住所</th>
            </tr>
        </tbody>
        <tbody>
            @forelse ($customers as $customer)
            <tr>
                <th scope="row" class="text-center">{{ $customer->id }}</th>
                <td>
                    <a href="{{ url('/customers', $customer->id)}}">{{ $customer->name }}</a>
                </td>
                <td class="text-center">@include('customers.gender')</td>
                <td class="text-center">{{ $customer->age }}</td>
                {{-- <td>{{ $customer->birth }}</td> --}}
                <td class="text-center">{{ $customer->tel }}</td>
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
@can('admin-higher')
<a class="btn btn-outline-primary" href="{{ action('CustomerController@create') }}" role="button">追加</a>
@endcan
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">

    <h4>顧客データベース</h4>

    <form action="{{ url('/customers' )}}" method="get">
        <div class="input-group mb-3 col-md-6">
            <input type="text" class="form-control" placeholder="search" name="search" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{$search}}">
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">検索</button>
        </div>
    </form>

    <table class="table table-hover table-bordered">
        <tbody>
            <tr>
                <th scope="col" class="text-center col-1">ID</th>
                <th scope="col" class="text-center col-2">名前</th>
                <th scope="col" class="text-center col-1">性別</th>
                <th scope="col" class="text-center col-1">年齢</th>
                <th scope="col" class="text-center col-2">電話番号</th>
                <th scope="col" class="text-center col-5">住所</th>
            </tr>
        </tbody>
        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <th scope="row" class="text-center">{{ $customer->id }}</th>
                    <td>
                        <a href="{{ url('/customers', $customer->id)}}">{{ $customer->name }}</a>
                    </td>
                    <td class="text-center">{{ $customer->gender }}</td>
                    <td class="text-center">{{ $customer->age }}</td>
                    <td class="text-center">{{ $customer->tel }}</td>
                    <td>{{ $customer->address }}</td>
                </tr>
            @empty
                <h5>該当なし</h5>
            @endforelse
            </tbody>
        </table>

<div class="paginate">
    <div class="page">
        {{ $customers->appends(request()->input())->links() }}
    </div>
</div>

@can('admin-higher')
<a class="btn btn-outline-primary" href="{{ action('CustomerController@create') }}" role="button">追加</a>
@endcan
</div>

@endsection

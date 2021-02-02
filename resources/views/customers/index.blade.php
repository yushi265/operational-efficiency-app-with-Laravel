@extends('layouts.app')

@section('content')

<div class="container">
    <h4>顧客データベース　　　　個人|<a href="#">法人</a></h4>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">名前</th>
                <th scope="col">性別</th>
                <th scope="col">年齢</th>
                {{-- <th scope="col">生年月日</th> --}}
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
                <td>@include('customers.gender')</td>
                <td>{{ $customer->age }}</td>
                {{-- <td>{{ $customer->birth }}</td> --}}
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
@can('admin-higher')
<a class="btn btn-outline-primary" href="{{ action('CustomerController@create') }}" role="button">追加</a>
@endcan
</div>

<nav>
  <ul>
    @can('system-only') {{-- システム管理者権限のみに表示される --}}
      <li><a href="">機能１</a></li>
    @elsecan('admin-higher') {{-- 管理者権限以上に表示される --}}
      <li><a href="">機能２</a></li>
      <li><a href="">機能３</a></li>
    @elsecan('user-higher') {{-- 一般権限以上に表示される --}}
      <li><a href="">機能４</a></li>
      <li><a href="">機能４</a></li>
      <li><a href="">機能４</a></li>
      <li><a href="">機能５</a></li>
    @endcan
  </ul>
</nav>

@endsection

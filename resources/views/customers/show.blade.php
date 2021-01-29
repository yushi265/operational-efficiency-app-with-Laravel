@extends('layouts.app')

@section('content')

<div class="container">
<h4>　　{{ $customer->id}}　　{{ $customer->name}}</h4>

    <table class="table">
        <tbody>
            {{-- <tr>
                <th scope="row" class="text-center col-md-3">名前</th>
                <td class="col-md-4">{{ $customer->name }}</td>
            </tr> --}}
            <tr>
                <th scope="row" class="text-center  col-md-3">性別</th>
                <td class="col-md-4">{{ $customer->gender}}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">年齢</th>
                <td>{{ $customer->age}}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">生年月日</th>
                <td>{{ $customer->birth}}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">電話番号</th>
                <td>{{ $customer->tel}}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">住所</th>
                <td>{{ $customer->address}}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">メールアドレス</th>
                <td>{{ $customer->mail}}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">職業</th>
                <td>{{ $customer->job}}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">勤務先</th>
                <td>{{ $customer->company}}</td>
            </tr>
        </tbody>
    </table>

    <a class="btn btn-outline-primary" href="{{ action('CustomerController@edit', $customer) }}" role="button">編集</a>
    <br><br>
    <a href="{{ route('index') }}">←戻る</a>
</div>

@endsection

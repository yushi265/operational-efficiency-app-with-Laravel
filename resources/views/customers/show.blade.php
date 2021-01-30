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
                <td>{!! str_replace('-', '/', $customer->birth) !!}</td>
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

    <a class="btn btn-outline-primary" href="{{ action('CustomerController@edit', $customer) }}" role="button">編集</a><br><br>

    <h4>活動記録</h4>

    @forelse ($customer->progresses()->orderby('id', 'desc')->get() as $progress)
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" class="text-center col-md-3">{{ $progress->user->name }}</th>
                <td class="col-md-4"></td>
            </tr>
            <tr>
                <th scope="row" class="text-center">状態</th>
                <td>{{ $progress->subject }}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">内容</th>
                <td>{{ $progress->body }}</td>
            </tr>
        </tbody>
    </table>
    @empty
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" class="text-center">
                    記録はありません
                </th>
            </tr>
        </tbody>
    </table>
    @endforelse

    <br><br>
    <a href="{{ url('/customers') }}">←戻る</a>
</div>

@endsection

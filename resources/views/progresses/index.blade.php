@extends('layouts.app')

@section('content')

@foreach ($progresses as $progress)

<div class="container">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" class="text-center  col-md-3">ユーザー</th>
                <td class="col-md-4">{{ $progress->user->name }}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">顧客</th>
                <td>{{ $progress->customer->name }}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">題名</th>
                <td>{{ $progress->subject }}</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">内容</th>
                <td>{{ $progress->body }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endforeach

@endsection

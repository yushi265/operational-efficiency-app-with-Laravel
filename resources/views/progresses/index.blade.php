@extends('layouts.app')

@section('content')

<div class="container">
    <h4>進捗一覧　　
        <a class="btn btn-outline-primary" href="{{ action('ProgressController@create') }}" role="button">追加</a>
    </h4>
@foreach ($progresses as $progress)

    <table class="table">
        <tbody>
            <tr>
                <th scope="row" class="text-center col-md-3">{{ $progress->user->name }}</th>
                <td class="col-md-4">{{$progress->customer->id}}　:　{{ $progress->customer->name }}</td>
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

    @endforeach
</div>

@endsection

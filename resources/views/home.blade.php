@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">追加する</div>
                <div class="card-body">
                    <a class="btn btn-outline-primary" href="{{ action('ProgressController@create') }}" role="button">進　捗</a>
                    @can('admin-higher')
                    <a class="btn btn-outline-primary" href="{{ action('CustomerController@create') }}" role="button">顧　客</a>
                    <a class="btn btn-outline-primary" href="{{ action('ContractController@create') }}" role="button">成　約</a>
                    @endcan
                    @can('system-only')
                    <a class="btn btn-outline-primary" href="{{ route('register') }}" role="button">ユーザー</a>
                    @endcan
                </div>
            </div>

            <div class="card">
                <div class="card-header">最新の進捗</div>
                <div class="card-body">
                    @foreach ($latest_progresses as $progress)
                    <table class="table table-bordered small">
                        <tbody>
                            <tr>
                                <td class="text-center col-md-2">{{ $progress->user->name }}</td>
                                <td class="col-md-4">
                                    <a href="{{ action('CustomerController@show', $progress->customer->id)}}">{{$progress->customer->id}}　:　{{ $progress->customer->name }}</a>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
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
            </div>
        </div>
    </div>
</div>
@endsection

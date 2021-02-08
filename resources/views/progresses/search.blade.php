@extends('layouts.app')

@section('content')

<div class="container">
    <h4>
        @if ($request->status === NULL)
        検索結果:「{{$request->search}}」
        @else
        検索結果:「{{$request->search}},{{$request->status}}」
        @endif
    </h4>
    @foreach ($results as $progress)
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row" class="text-center col-md-3">{{ $progress->user->name }}</th>
                <td class="col-md-4">
                    <a href="{{ action('CustomerController@show', $progress->customer->id)}}">{{$progress->customer->id}}　:　{{ $progress->customer->name }}</a>
                </td>
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
    <div class="paginate">
        <div class="page">
            {{ $results->links() }}
        </div>
    </div>
    <a href="{{ url('/progresses') }}">←戻る</a>
</div>

@endsection

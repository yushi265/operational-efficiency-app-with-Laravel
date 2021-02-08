@extends('layouts.app')

@section('content')

<div class="container">
    <h4>進捗一覧　　
        <a class="btn btn-outline-primary" href="{{ action('ProgressController@create') }}" role="button">追加</a>
    </h4>
    <form action="{{ url('/progresses/search' )}}" method="post">
        <div class="input-group mb-3 col-md-6">
            @csrf
            <input type="text" class="form-control" placeholder="search" name="search" aria-label="Recipient's username" aria-describedby="button-addon2">
            <select class="form-select col-md-3" name="status" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="">状態</option>
                <option value="進捗">進捗</option>
                <option value="有効情報">有効情報</option>
                <option value="契約成立">契約成立</option>
            </select>
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">検索</button>
        </div>
    </form>
@foreach ($progresses as $progress)

    <table class="table table-bordered">
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
    <div class="paginate">
        <div class="page">
            {{ $progresses->links() }}
        </div>
    </div>
</div>

@endsection

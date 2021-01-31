@extends('layouts.app')

@section('content')

<div class="container">
    <h4>成約一覧　　<a class="btn btn-outline-primary" href="{{ action('ContractController@create') }}" role="button">追加</a></h4>
    {{-- @foreach ($contracts as $contract) --}}

    <table class="table">
        <tbody>
            <tr>
                <th scope="row" class="text-center col-md-3">顧客名</th>
                <td class="col-md-4">山田一郎</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">成約種類</th>
                <td>普通預金</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">金額</th>
                <td>1000円</td>
            </tr>
            <tr>
                <th scope="row" class="text-center">満期日</th>
                <td>1年後</td>
            </tr>
        </tbody>
    </table>
    {{-- @endforeach --}}
</div>

@endsection

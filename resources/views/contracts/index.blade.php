@extends('layouts.app')

@section('content')

<div class="container">
    <h4>成約一覧
        @can('admin-higher')
        <a class="btn btn-outline-primary" href="{{ action('ContractController@create') }}" role="button">追加</a>
        @endcan
    </h4>

    <form action="{{ url('/contracts/search' )}}" method="post">
        <div class="input-group mb-3">
            @csrf
            <select class="form-select col-md-4" name="contract_type" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option value="2">普通預金</option>
                <option value="3">定期預金</option>
                <option value="4">融資</option>
            </select>
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">検索</button>
        </div>
    </form>

    @foreach ($contracts as $contract)
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" class="text-center col-md-3">顧客名</th>
                <td class="col-md-4"><a href="{{ action('CustomerController@show', $contract->customer_id)}}">{{ $contract->customer->name}}</a></td>
            </tr>
            <tr>
                <th scope="row" class="text-center">成約種類</th>
                <td>
                    @switch($contract->contract_type)
                        @case(2)
                            普通預金
                            @break
                        @case(3)
                            定期預金
                            @break
                        @case(4)
                            融資
                            @break
                    @endswitch
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">金額</th>
                <td>￥{{number_format($contract->amount)}}</td>
            </tr>
            @if ($contract->contract_type !== 2)
            <tr>
                <th scope="row" class="text-center">満期日</th>
                <td>{{$contract->due_date}}</td>
            </tr>
            @endif
        </tbody>
    </table>
    @endforeach
</div>

@endsection

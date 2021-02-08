@extends('layouts.app')

@section('content')

<div class="container">
    <h4>
        検索結果：「
        @switch($request->contract_type)
            @case(2)
                普通預金
                @break
            @case(3)
                定期預金
                @break
            @case(4)
                融資
                @break
        @endswitch」
    </h4><br>
    @forelse ($results as $contract)
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" class="text-center col-md-3">顧客名</th>
                <td class="col-md-4">{{ $contract->customer->name}}</td>
            </tr>
        </tbody>
        <tbody>
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
    @empty
    該当結果はありません
    @endforelse
    <div class="paginate">
        <div class="page">
            {{ $results->links() }}
        </div>
    </div>
    <a href="{{ url('/contracts') }}">←戻る</a>
</div>

@endsection

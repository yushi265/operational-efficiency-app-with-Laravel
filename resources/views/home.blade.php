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
                                <td>
                                    @switch($progress->status)
                                        @case(1)
                                            有効情報
                                            @break
                                        @case(5)
                                            進捗
                                            @break
                                        @default
                                            契約成立
                                    @endswitch
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">内容</th>
                                <td>{{ $progress->body }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                    <a href="{{ url('/progresses') }}">→進捗一覧へ</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">最新の成約</div>
                <div class="card-body">
                    @foreach ($latest_contracts as $contract)
                    <table class="table table-bordered small">
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center col-md-3">顧客名</th>
                                <td class="col-md-4"><a href="{{ action('CustomerController@show', $contract->customer_id)}}">{{ $contract->customer->name}}</a></td>
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
                    @endforeach
                    <a href="{{ url('/contracts')}}">→成約一覧へ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

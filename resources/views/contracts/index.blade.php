@extends('layouts.app')

@section('content')

<div class="container">
    <h4>成約一覧
        @can('admin-higher')
        　　<a class="btn btn-outline-primary" href="{{ action('ContractController@create') }}" role="button">追加</a>
        @endcan
    </h4>

    <form action="{{ action('ContractController@search') }}" method="get">
        <div class="input-group mb-3">
            <select class="form-select col-md-4" name="contract_type" id="inputGroupSelect04" aria-label="Example select with button addon">
                {{-- <option value="" {{ !$request->filled('contract_type') ? 'selected' : ''}}>-</option> --}}
                <option value="2"
                    {{ $request->input('contract_type') == '2' ? 'selected' : ''}}>
                    普通預金
                </option>
                <option value="3"
                    {{ $request->input('contract_type') == '3' ? 'selected' : ''}}>
                    定期預金
                </option>
                <option value="4"
                    {{ $request->input('contract_type') == '4' ? 'selected' : ''}}>
                    融資
                </option>
            </select>
            <button class="btn btn-outline-primary" type="submit" id="button-addon2">検索</button>
        </div>
    </form>

    @forelse ($contracts as $contract)
    <div class="row">
        <div class="col-10">
            <table class="table table-bordered">
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
        </div>
        <div class="col-2">
            @can('admin-higher')
                <a class="btn btn-outline-success" href="{{ action('ContractController@edit', $contract) }}" role="button">編集</a>
                <form action="{{ action('ContractController@destroy', $contract) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger" type="submit" value="{{ $contract->id }}" role="button">削除</button>
                </form>
            {{-- @elsecan('user-higher')
                @if ($progress->user->id === $auth->id)
                    <a class="btn btn-outline-success" href="#" role="button">編集</a>
                @endif --}}
            @endcan
        </div>
    </div>
        @empty
        まだ成約はありません
        @endforelse
        <div class="paginate">
            <div class="page">
                {{ $contracts->appends(request()->input())->links() }}
        </div>
    </div>
</div>

@endsection

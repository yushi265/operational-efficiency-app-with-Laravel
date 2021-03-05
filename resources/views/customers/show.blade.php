@extends('layouts.app')

@section('content')

<div class="container">
    <h4>　　{{ $customer->id}}　　{{ $customer->name}}（{{ $customer->ruby }}）</h4>
    <div class="row">
        <div class="col-7">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">性別</th>
                        <td class="">
                            @switch($customer->gender)
                            @case(1)
                                男
                                @break
                            @case(2)
                                女
                                @break
                            @default
                                その他
                        @endswitch
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">年齢</th>
                        <td>{{ $customer->age}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">生年月日</th>
                        <td>{!! str_replace('-', '/', $customer->birth) !!}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">電話番号</th>
                        <td>{{ $customer->tel}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">住所</th>
                        <td>{{ $customer->address}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">メールアドレス</th>
                        <td>{{ $customer->mail}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">職業</th>
                        <td>{{ $customer->job}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">勤務先</th>
                        <td>{{ $customer->company}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="suggest col-5">
            <h4>提案</h4>
            <ul>
                @empty($suggests)
                <li>提案はありません<br>積極的に情報収集をしましょう！</li>
                @endempty
                @foreach ($suggests as $suggest)
                <li>{{$suggest}}</li>
                @endforeach
            </ul>
        </div>
    </div>

    @can('admin-higher')
    <a class="btn btn-outline-primary" href="{{ action('CustomerController@edit', $customer) }}" role="button">編集</a><br><br>
    @endcan

    <h4>預金状況</h4>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="col" class="text-center col-md-4">普通預金</th>
                <th scope="col" class="text-center col-md-4">定期預金</th>
                <th scope="col" class="text-center col-md-4">融資</th>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td class="text-center">￥{{ number_format($deposit_status['ordinary']) }}</td>
                <td class="text-center">￥{{ number_format($deposit_status['time']) }}</td>
                <td class="text-center">￥{{ number_format($deposit_status['loan']) }}</td>
            </tr>
        </tbody>
    </table>

    <br>
    <h4>活動記録(最新５件)</h4>
    @forelse ($customer->progresses()->latest()->limit(5)->get() as $progress)
        <div class="row">
        <div class="col-11">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="text-center col-5">{{ $progress->user->name }}</td>
                        <td class="">
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
        </div>
        <div class="col-1">
            @can('admin-higher')
                <a class="btn btn-outline-success" href="{{ action('ProgressController@edit', $progress) }}" role="button">編集</a>
                <form action="{{ action('ProgressController@destroy', $progress) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger" type="submit" value="{{ $progress->id }}" role="button">削除</button>
                </form>
            {{-- @elsecan('user-higher')
                @if ($progress->user->id === $auth->id)
                    <a class="btn btn-outline-success" href="#" role="button">編集</a>
                @endif --}}
            @endcan
        </div>
    </div>
    @empty
    まだ進捗はありません
    @endforelse


    <br><br>
    <a href="{{ url('/customers') }}">←戻る</a>
</div>

@endsection

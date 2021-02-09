@extends('layouts.app')

@section('content')

<div class="container">
    <h4>権限一覧　　
        <a class="btn btn-outline-primary" href="{{ route('register') }}" role="button">ユーザー追加
        </a>
</h4>
    <form action="{{ action('UserController@admin_set') }}" method="post">
        @csrf
        @method('patch')
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th class="text-center col-md-3">ID</th>
                    <th class="">ユーザー</th>
                    <th class="col-md-6 ">権限</th>
                </tr>
            </tbody>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="text-center ">{{ $user->id }}</td>
                    <td class=" ">{{ $user->name }}</td>
                    <td>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="user_admin_{{ $user->id }}">
                            <option selected value="{{ $user->role }}">
                                @switch($user->role)
                                @case(1)
                                システム管理者
                                @break
                                @case(5)
                                管理者
                                @break
                                @case(10)
                                一般ユーザー
                                @break
                                @endswitch
                            </option>
                            @if (Auth::id() !== $user->id)
                            <option value="1">システム管理者</option>
                            <option value="5">管理者</option>
                            <option value="10">一般ユーザー</option>
                            @endif
                        </select>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        <button class="btn btn-outline-primary" type="submit">権限を変更する</button>
    </form><br>

</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ url('/customers') }}" method="post">
        @csrf
        <div class="row g-2">
            <div class="col-md-5">
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="名前" value="{{old('name')}}">
                    <label for="name">名前</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" name="ruby" class="form-control" id="ruby" placeholder="フリガナ" value="{{old('ruby')}}">
                    <label for="ruby">フリガナ</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating">
                    <select class="form-select" name="gender" id="gender" aria-label="Floating label select example">
                        <option value="" selected>選んでください</option>
                        <option value="男" @if(old('gender') == '男') selected  @endif>男</option>
                        <option value="女" @if(old('gender') == '女') selected  @endif>女</option>
                        <option value="その他" @if(old('gender') == 'その他') selected  @endif>その他</option>
                    </select>
                    <label for="gender">性別</label>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type=text class="form-control" name="address" id="address" placeholder="住所" value="{{old('address')}}">
                        <label for="address">住所</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type=text class="form-control" name="birth" id="birth" placeholder="住所" value="{{old('birth')}}">
                        <label for="birth">生年月日　例:2000-03-25</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="tel" id="tel" placeholder="電話番号" value="{{old('tel')}}">
                        <label for="tel">電話番号</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="メールアドレス" value="{{old('mail')}}">
                        <label for="mail">メールアドレス</label>
                    </div>
                </div>
            </div>

            <div class="row g-2">
                <div class="col-md-4">
                    <div class="form-floating">
                        <select class="form-select" name="job" id="job" aria-label="Floating label select example">
                            <option value="" selected>選んでください</option>
                            <option value="会社員" @if(old('job') == '会社員') selected  @endif>会社員</option>
                            <option value="会社役員" @if(old('job') == '会社役員') selected  @endif>会社役員</option>
                            <option value="自営業" @if(old('job') == '自営業') selected  @endif>自営業</option>
                            <option value="学生" @if(old('job') == '学生') selected  @endif>学生</option>
                            <option value="無職/退職された方" @if(old('job') == '無職/退職された方') selected  @endif>無職/退職された方</option>
                        </select>
                        <label for="job">職業</label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="company" id="company" placeholder="勤務先" value="{{old('company')}}">
                        <label for="company">勤務先</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">登録</button>
    </form>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <a href="{{ url('/customers') }}">←戻る</a>

        @endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ url('/progresses') }}" method="post">
        @csrf
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <select class="form-select" name="customer_id" id="customer_id" aria-label="Floating label select example" required>
                        <option selected>選んでください</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                    <label for="customer_id">顧客氏名</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <select class="form-select" name="status" id="status" aria-label="Floating label select example" required>
                        <option value="進捗" selected>進捗</option>
                        <option value="有効情報">有効情報</option>
                        <option value="契約成立">契約成立</option>
                    </select>
                    <label for="status">状態</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" name="body" class="form-control" id="body" placeholder="内容" required>
                    <label for="body">内容</label>
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

    <a href="{{ url('/progresses') }}">←戻る</a>

        @endsection

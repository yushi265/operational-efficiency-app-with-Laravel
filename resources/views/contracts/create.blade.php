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
                    <select class="form-select" name="contract_type" id="contract_type" aria-label="Floating label select example" required>
                        <option value="普通預金" selected>普通預金</option>
                        <option value="定期預金">定期預金</option>
                        <option value="融資">融資</option>
                    </select>
                    <label for="contract_type">成約種類</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" name="amount" class="form-control" id="amount" placeholder="金額" required>
                    <label for="amount">金額</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" name="due_date" class="form-control" id="due_date" placeholder="期限日" required>
                    <label for="amount">期限日</label>
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

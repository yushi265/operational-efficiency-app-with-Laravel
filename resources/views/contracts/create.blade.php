@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ url('/contracts') }}" method="post">
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
                        <option value="02" selected>普通預金</option>
                        <option value="03">定期預金</option>
                        <option value="04">融資</option>
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
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <select class="form-select" name="due_date" id="due_date" aria-label="Floating label select example">
                        <option value="" selected>-</option>
                        @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ date("Y/m/d", strtotime('+'.$i.' year')) }}">{{ $i }}年</option>
                        @endfor
                    </select>
                    <label for="due_date">期間</label>
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

    <a href="{{ url('/contracts') }}">←戻る</a>

    @endsection

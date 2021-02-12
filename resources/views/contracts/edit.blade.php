@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ action('ContractController@update', $contract) }}" method="post">
        @csrf
        @method('patch')
            <div class="col-md-8">
                <h4>ID:{{ $contract->customer->id}}　{{ $contract->customer->name }}</h4>
                <input type="hidden" name="customer_id" value="{{ $contract->customer_id }}">
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <select class="form-select" name="contract_type" id="contract_type" aria-label="Floating label select example">
                        <option value="02"
                            @if (old('contract_type', $contract->contract_type) == '2')
                                selected
                            @endif>普通預金
                        </option>
                        <option value="03"
                            @if (old('contract_type', $contract->contract_type) == '3')
                                selected
                            @endif>定期預金
                        </option>
                        <option value="04"
                            @if (old('contract_type', $contract->contract_type) == '4')
                                selected
                            @endif>融資
                        </option>
                    </select>
                    <label for="contract_type">成約種類</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating mb-3">
                    <input type="text" name="amount" class="form-control" id="amount" placeholder="金額"  value="{{ old('amount', $contract->amount)}}">
                    <label for="amount">金額</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <select class="form-select" name="due_date" id="due_date" aria-label="Floating label select example">
                        <option value="{{ old('due_date', $contract->due_date) }}">{{ old('due_date', $contract->due_date) }}</option>
                        <option value="">-</option>
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

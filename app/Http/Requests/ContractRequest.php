<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_id' => 'required',
            'contract_type' => 'required',
            'amount' => 'required|integer|digits_between:1,20',
        ];
    }

    public function messages()
    {
        return [
            'customer_id.required' => '顧客を選択してください',
            'contract_type.required' => '種類を選択してください',
            'amount.required'  => '金額を入力してください',
            'amount.integer' => '金額は数字で入力してください',
            'amount.digits_between' => '金額は15桁以内で入力してください',
        ];
    }
}

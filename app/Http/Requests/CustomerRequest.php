<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required|max:30',
            'gender' => 'required',
            'birth' => 'required|before_or_equal:"now"',
            'tel' => 'required|integer|digits_between:1,11',
            'address' => 'required',
            'mail' => '',
            'job' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前は30文字以内で入力してください',
            'gender.required'  => '性別を選択してください',
            'birth.required' => '生年月日を入力してください',
            'birth.before_or_equal' => '生年月日を確認してください',
            'tel.required' => '電話番号を入力してください',
            'tel.integer' => '電話番号は数字で入力してください',
            'tel.digits_between' => '電話番号は11文字以内で入力してください',
            'address.required' => '住所を入力してください',
            'mail.email' => 'メールアドレスを正しい形式で入力してください',
            'job.required' => '職業を選択してください',
        ];
    }
}

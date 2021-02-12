<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgressRequest extends FormRequest
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
            'status' => 'required',
            'body' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'customer_id.required' => '顧客を選択してください',
            'status.required' => '状態を選択してください',
            'body.required' => '内容を入力してください',
            'body.max' => '内容は255文字以内で入力してください'
        ];
    }
}

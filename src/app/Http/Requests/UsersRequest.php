<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'target_weight'=>'required|numeric|regex:/^\d{1,3}(\.\d)?$/|regex:/^\d+(\.\d{1})?$/',
            'weight'=>'required|regex:/^\d{1,3}(\.\d)?$/|regex:/^\d+(\.\d{1})?$/',
        ];
    }
        public function messages(){
            return [
                'name.required'=>'名前を入力してください',
                'email.requied'=>'メールアドレスを入力してください',
                'email.email'=>'メールアドレスは「ユーザー名＠ドメイン」形式で入力してください',
                'password.required'=>'パスワードを入力してください',
                'target_weight.required'=>'目標の体重を入力してください',
                'target_weight.regex:/^\d{1,3}(\.\d)?$/'=>'４桁までの数字で入力してください',
                'target_weight.regex:/^\d+(\.\d{1})?$/'=>'小数点は１桁で入力してください',
                'weight.required'=>'現在の体重を入力してください',
                'weight.regex:/^\d{1,3}(\.\d)?$/'=>'４桁までの数字で入力してください',
                'weight.regex:/^\d+(\.\d{1})?$/'=>'小数点は１桁で入力してください',
            ];
    }
    

}
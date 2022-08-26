<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            "name" => "required|max:100",
            "tc" => "required|max:11|unique:users,tc",
            "phone"=>"required|max:11|unique:users,phone",
            "email"=>"required|max:255|unique:users,email",
            "password"=>"required|min:8",

           // |confirmed




        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Ad soyad zorunludur.',
            'name.max' => 'Ad soyad maksimum 100 karakter olmalıdır.',
            'tc.required' => 'TC Kimlik no zorunludur.',
            'tc.max' => 'TC Kimlik no maksimum 11 karakter olmalıdır.',
            'tc.unique' => 'Bu TC Kimlik no kayıtlıdır.',
            'phone.required' => 'Telefon no zorunludur.',
            'phone.max' => 'Telefon no maksimum 11 karakter olmalıdır.',
            'phone.unique' => 'Bu Telefon no kayıtlıdır.',
            'email.required' => 'email alanı zorunludur.',
            'email.max' => 'email maksimum 255 karakter olmalıdır.',
            'email.unique' => 'Bu email kayıtlıdır.',
            'password.required' => 'şifre alanı zorunludur.',
            'password.max'=> 'şifre minumum 8 karakter olmalıdır.',
            // 'password.confirmed'=> 'şifreler uyuşmamaktadır .',





        ];
    }
}

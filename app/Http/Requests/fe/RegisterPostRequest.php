<?php

namespace App\Http\Requests\fe;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','unique:users'],
            // 'phone'=>['required','regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/'],
            'email'=>['required','email'],
            'password'=>['required'],
            'Rpassword' =>'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Không được để trống',
            'name.unique'=> 'Tên đã tồn tại',
            'email.required'=> 'Không được để trống',
            'email.email' => 'Sai định dạng email',
            'password.required'=> 'Không được để trống',
            'Rpassword.required' =>'Không được để trống'
        ];
    }
}

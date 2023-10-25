<?php

namespace App\Http\Requests\tab;

use Illuminate\Foundation\Http\FormRequest;

class TabUpdateRequest extends FormRequest
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
            'name' => 'required | unique:tabs,id,'.$this->id,
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Không được để trống',
            'name.unique' => ".$this->name đã tồn tại",
            'description.required' => 'Không được để trống'
        ];
    }
}

<?php

namespace App\Http\Requests\banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerUpdateRequest extends FormRequest
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
    public function rules()
    {
        return [
            'banner_name' => 'required|unique:banners,id,'.$this->id,
            'banner_link' => 'required',
            'caption' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'banner_name.unique' => 'Tên banner đã tồn tại',
            'banner_link.requied' => 'link banner không được để trống',
            'caption' => 'Caption không được để trống'
        ];
    }
}

<?php

namespace App\Http\Requests\banner;

use Illuminate\Foundation\Http\FormRequest;

class bannerStoreRequest extends FormRequest
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
            'banner_name' => 'required | unique:banners',
            'banner_link' => 'required',
            'banner_image' => 'required | image'
        ];
    }

    public function messages()
    {
        return [
            'banner_name.required' => 'Tên banner không được để trống',
            'banner_name.unique' => 'Tên banner đã tồn tại',
            'banner_link' => 'Đường liên kết không được để trống',
            'banner_image.required' => 'Ảnh banner không được để trống',
            'banner_image.image' => 'Đuôi ảnh không hợp lệ'
        ];
    }
}

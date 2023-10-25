<?php

namespace App\Http\Requests\blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
            'tittle' =>'required | unique:blogs,id,'.$this->id,
            'photo' => 'image',
            'link_blog' =>'required | unique:blogs,id,'.$this->id
        ];
    }

    public function messages()
    {
        return [
            'tittle.required' => 'Tên không được để trống',
            'tittle.unique' =>'Tên đã tồn tại',
            'photo.image' => 'Sai đuôi ảnh',
            'link_blog.required' =>'Link không được để trống',
            'link_blog.unique' => 'Link đã tồn tại'
        ];
    }
}

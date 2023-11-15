<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class RoomPostRequest extends FormRequest
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
            'name' => ['required'],
            'photo' => ['required','image'],
            'price' => ['required','numeric'],
            'room_code' => 'required | unique:rooms',
            'adluts' => 'required | min:0 | max:30 | numeric',
            'children' => 'required | min:0 | max:30 | numeric'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=> 'Không được để trống',
            'photo.required' => 'Không được để trống',
            'photo.image' => 'Đuôi ảnh không hợp lệ',
            'price.required' => 'Không được để trống',
            'price.numeric' => 'Sai định dạng',
            'room_code.required' => 'Không được để trống',
            'room_code.unique' => 'Mã phòng đã tồn tại',
            'adluts.required' => 'Không được để trống',
            'adluts.min' => 'Số người phải lớn hơn 0',
            'adluts.max' => 'Số người phải nhỏ hơn 30',
            'children.required' => 'Không được để trống',
            'children.min' => 'Số người phải lớn hơn 0',
            'children.max' => 'Số người phải nhỏ hơn 30'
        ];
    }
}

<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class RoomEditRequest extends FormRequest
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
            'photo' => ['image'],
            'photo[]' => ['image'],
            'price' => ['required','numeric'],
            'room_code' => 'required | unique:rooms,room_code,'.$this->id,
            'adluts' => ['required' , 'min:1' , 'max:5'],
            'children' => ['required' , 'min:1' , 'max:5'],
        ];
    }

    public function messages()
    {
        return[
            'name.required'=> 'Không được để trống',
            'photo.image' => 'Đuôi ảnh không hợp lệ',
            'photo[].image' => 'Đuôi ảnh không hợp lệ',
            'price.required' => 'Không được để trống',
            'price.numeric' => 'Sai định dạng',
            'room_code.required' => 'Không được để trống',
            'room_code.unique' => 'Mã phòng đã tồn tại',
            'adluts.required' => 'Không được để trống',
            'adluts.min' => 'Tối thiểu 1 người',
            'adluts.max' => 'Tối đa 5 người',
            'children.required' => 'Không được để trống',
            'children.min' => 'Tối thiểu 1 người',
            'children.max' => 'Tối đa 5 người',

        ];
    }
}

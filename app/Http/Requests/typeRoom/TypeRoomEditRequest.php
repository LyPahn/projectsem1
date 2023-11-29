<?php

namespace App\Http\Requests\typeRoom;

use Illuminate\Foundation\Http\FormRequest;

class TypeRoomEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'room_type' => 'required | unique:type_rooms,room_type,'.$this->room_type
        ];
    }
    public function messages()
    {
        return [
            'room_type.required' => 'Không được để trống',
            'room_type.unique' => 'Hạng phòng đã tồn tại',
        ];
    }
}

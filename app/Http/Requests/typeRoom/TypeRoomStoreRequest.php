<?php

namespace App\Http\Requests\typeRoom;

use Illuminate\Foundation\Http\FormRequest;

class TypeRoomStoreRequest extends FormRequest
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
            'room_type' => 'required | unique:type_rooms'
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

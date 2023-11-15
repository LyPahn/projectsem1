<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class BookingStoreRequest extends FormRequest
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
            'check_in' => ['required'],
            'check_out' => ['required'],
            'phone' => ['required'],
            'email' => ['required'],
            'adluts' => ['required'],
            'children' => ['required'],
            'room_id' => ['required']

        ];
    }

    public function messages()
    {
        return[
            'check_in.required'=> 'Không được để trống',
            'check_out.required'=> 'Không được để trống',  
            'phone.required'=> 'Không được để trống',  
            'email.required'=> 'Không được để trống',  
            'adluts.required'=> 'Không được để trống',  
            'children.required'=> 'Không được để trống',  
            'room_id.required'=> 'Không được để trống',  
        ];
    }
}

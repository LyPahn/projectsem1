<?php

namespace App\Http\Requests\Booking;

use App\Rules\CheckOutDateGreaterThanCheckInDate;
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
            'check_in' => 'required|date',
                'check_out' => ['required', 'date', new CheckOutDateGreaterThanCheckInDate('check_in')],
            'phone' => ['required'],
            'email' => ['required'],
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
            'room_id.required'=> 'Không được để trống',  
        ];
    }
}

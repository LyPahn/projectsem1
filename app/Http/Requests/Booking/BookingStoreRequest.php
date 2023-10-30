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
            'check_out' => 'required|gt:check_in'
        ];
    }

    public function messages()
    {
        return[
            'check_in.required'=> 'Không được để trống',
            'check_out.required'=> 'Không được để trống',  
            'check_out.gt'=> 'Không được bé hơn check_in',  
        ];
    }
}

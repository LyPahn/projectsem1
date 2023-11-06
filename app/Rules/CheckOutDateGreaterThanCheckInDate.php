<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckOutDateGreaterThanCheckInDate implements Rule
{
    protected $checkInDate;

    public function __construct($checkInDate)
    {
        $this->checkInDate = $checkInDate;
    }

    public function passes($attribute, $value)
    {
        $checkInDateValue = request()->input($this->checkInDate);

        if ($checkInDateValue) {
            return strtotime($value) > strtotime($checkInDateValue);
        }

        return false;
    }

    public function message()
    {
        return 'ngày trả phòng ko đc bé hơn ngày nhận phòng';
    }
}

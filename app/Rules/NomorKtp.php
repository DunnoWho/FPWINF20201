<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NomorKtp implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(strlen($value) != 16){
            return false;
        }
        if (!is_numeric(substr($value, 0, 6))) {
            return false;
        }
        if (request()->input("gender") == "L" && intval(substr($value, 6, 2)) <= 0 && intval(substr($value, 6, 2)) > 31) {
            return false;
        }
        if (request()->input("gender") == "P" && intval(substr($value, 6, 2)) <= 40 && intval(substr($value, 6, 2)) > 71) {
            return false;
        }
        if (intval(substr($value, 8, 2)) <= 0 && intval(substr($value, 8, 2)) > 12) {
            return false;
        }
        if (!is_numeric(substr($value, 10, 6))) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid KTP number';
    }
}

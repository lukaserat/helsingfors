<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class BookingPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Everyone is welcome to do this request
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'in_date' => 'required|date|after:tomorrow|date_format:"YYYY/MM/DD"',
            'out_date' => 'required|date|after:in_date|date_format:"YYYY/MM/DD"',
            'num_passengers' => 'required|min:1'
        ];
    }
}

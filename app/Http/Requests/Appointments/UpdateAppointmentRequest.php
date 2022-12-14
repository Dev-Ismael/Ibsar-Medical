<?php

namespace App\Http\Requests\Appointments;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'member_id'     => ['required' , 'numeric'],
            'username'      => ['required', 'string', 'max:255'],
            'phone'         => ['required', 'string', 'max:255'],
            'date'          => ['required', 'string', 'max:255'],
            'time'          => ['required', 'string', 'max:255'],
        ];
    }
}

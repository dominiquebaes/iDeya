<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;

class ParticipantRegistrationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'school' => 'required|string',
            'contact' => 'required|string',
            'is_firsttime' => 'boolean',
        ];
    }
}

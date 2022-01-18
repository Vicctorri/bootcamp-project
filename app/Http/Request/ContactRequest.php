<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return[
            'firstname' => ['required', 'string', 'min:2'],
            'lastname' => ['required', 'string', 'min:2'],
            'email' => ['required', 'string', 'email'],
            'phonenumber' => ['required', 'string', 'min:10'],
            'subject' => ['required', 'string', 'min:3', 'in:education,computers,business,science,social,study'],
            'message' => ['required', 'string', 'min:12']
        ];
    }
}

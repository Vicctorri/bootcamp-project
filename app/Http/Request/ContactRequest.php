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
            'firstname' => ['min:2', 'required', 'string'],
            'lastname' => ['min:2', 'required', 'string'],
            'email' => ['string', 'email', 'required'],
            'phonenumber' => ['min:10', 'required', 'string'],
            'subject' => ['min:2', 'required', 'string'],
            'message' => ['min:12', 'required', 'string']
        ];
    }
}

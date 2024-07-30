<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\user;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'document'=>['required','numeric','unique:'.User::class],
            'fullname'=>['required','string'],
            'gender'=>['required'],
            'birthdate'=>['required','date'],
            'photo'=>['required','image'],
            'phone'=>['required'],
            'email'=>['required','string','lowercase','email','unique:'.User::class],
            'password'=>['required','confirmed']
        ];
    }
}
<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $expiredValidation = date('Y-m', time());
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::id().',id',
            'occupation' => 'required',
            'phone' => 'required|string',
            'address' => 'required|string',
            'discount'=>'nullable|string|exists:discounts,code,deleted_at,NULL'
        ];
    }
}

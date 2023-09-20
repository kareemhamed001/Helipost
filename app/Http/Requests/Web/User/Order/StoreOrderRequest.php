<?php

namespace App\Http\Requests\Web\User\Order;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'items' => 'required|array',
            'items.*.name' => 'required|string',
            'items.*.price' => 'required|numeric',
            'items.*.size' => 'required|in:small,large',
            'city' => 'required|string',
            'province' => 'required|string',
            'address' => 'required|string',
            'phone1' => 'required|string',
            'phone2' => 'nullable|string',
            'driver_notes' => 'nullable|string',
            'company_notes' => 'nullable|string',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'counterparty' => 'required|min:3|max:30',
            'tel' => 'required|min:3|max:15',
            'address' => 'required|min:3|max:50',
        ];
    }
    public function messages()
    {
        return[
          'counterparty.required' => 'Поле "Контрагент" обязательно для заполнения',
          'tel.required' => 'Поле "Телефон" обязательно для заполнения',
          'address.required' => 'Поле "Адрес" обязательно для заполнения',
        ];
    }
}

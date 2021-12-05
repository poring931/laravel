<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|min:5|max:30',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }

    // public function attributes() //только меняет атрибут сообщения (name->имя)
    // {
    //     return [
    //         'name' => 'Ваше имя',
    //     ];
    // }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'phone.required' => 'Поле телефон является обязательным',
            'email.required' => 'Поле почта является обязательным',
        ];
    }


}

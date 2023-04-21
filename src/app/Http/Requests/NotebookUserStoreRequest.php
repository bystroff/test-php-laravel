<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotebookUserStoreRequest extends FormRequest
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
            'firstname'  => 'required|min:3',
            'lastname'   => 'required|min:3',
            'middlename' => 'required|min:3',
            'phone'      => 'required|min:10',
            'email'      => 'required|email',
            'birthday',
            'photo'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
        $rules = [
            'task' => 'required|min:2'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'required' => 'Поле обязательно для заполнения',
            'min' => 'Поле должно содержать минимум :min символа'
        ];
    }
}

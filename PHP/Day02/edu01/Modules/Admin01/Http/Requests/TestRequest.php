<?php

namespace Modules\Admin01\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'title' => 'required|max:2',
            'body'  => 'required'
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => '标题必传',
            'title.max' => '长度不超过2',
            // 'title.is_positive_integer' => '必须正整数',
            'body.required' => 'body必传',
        ];
    }
    
    // protected function failedValidation(Validator $validator)
    // {
    //     echo('TestRequest :: failedValidation<hr>');
    //     dd($validator->errors()->messages());
    // }
}

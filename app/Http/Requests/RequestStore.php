<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStore extends FormRequest
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
            'sto_name'=>'required | unique:stores,sto_name,'.$this->id,
            'sto_content'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'sto_name.required'=>'Trường này không được để trống',
            'sto_name.unique'=>'Tên bài viết đã tồn tại',
            'sto_content.required'=>'Trường này không được để trống',
        ];
    }
}

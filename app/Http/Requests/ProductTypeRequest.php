<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductTypeRequest extends FormRequest
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
            'img' => 'bail|mimes:jpeg,gif,png|max:2048',
            'type_name_en' => 'required',
            'sort' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'img.max' => '上傳的檔案過大!',
            'img.mimes' => '上傳的檔案格式錯誤!',
            'type_name_en.required' => '標題為必填!',
            'sort.required' => '排序為必填!',
        ];
    }
}

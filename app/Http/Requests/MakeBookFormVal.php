<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeBookFormVal extends FormRequest
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
            "name" => "required|max:20" ,
            "price" => "numeric|nullable" ,
            "pages" => "numeric|required" ,
            "ISBN" => "numeric|nullable" ,
            "published_at" => "date|nullable",
            '_token'=>""
        ];
    }
    /*
    public function messages()
    {
        return [

        ];
    }*/
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            'brand_id'=>'required',
            'year_id'=>'required',
            'car_model_id'=>'required',
            'manual'=>'required|mimetypes:application/pdf|max:10000',
            'status'=>'required'
        ];
    }
}

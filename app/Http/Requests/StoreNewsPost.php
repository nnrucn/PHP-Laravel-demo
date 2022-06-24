<?php

namespace App\Http\Requests;

use App\Rules\UploadImgExt;
use Illuminate\Foundation\Http\FormRequest;

class StoreNewsPost extends FormRequest
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

//    public function test()
//    {
//        dump($this ->title);
//    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title"=>"required",
            "description" =>"required|max:200",
            "clicked"=>"required|numeric",
            "ImagePath"=>["required","image",new UploadImgExt()],
            "Content"=>"required"
        ];
    }
}

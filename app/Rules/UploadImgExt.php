<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UploadImgExt implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $filename = $value->getClientOriginalName();
        $arr = explode(".",$filename);
        $count = count($arr);

        $ext = $arr[$count - 1 ];

        if ($ext == "png"){
            return true;
        }else{
            return false;
        }

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '上传的图片格式必须是png';
    }
}

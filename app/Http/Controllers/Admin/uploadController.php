<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uploadController extends Controller
{
    public function imgupload(Request $request)
    {
        $info = [
            "code" => 200,
            "url" => '',
        ];

        if ($request->file("file")){
            $info['url'] = "/upload/".$request->file('file')->store('img');
        }else{
            $info['code'] = "400";
        }
        return $info;

    }
}

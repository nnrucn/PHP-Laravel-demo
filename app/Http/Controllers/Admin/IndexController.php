<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view("admin.index.index");
    }
//    后台登出功能
    public function logout()
    {
        $result = Auth::logout();
//        dump($result);
//        跳转到登录界面
        if (!$result){
            return redirect("/login");
        }
    }

}

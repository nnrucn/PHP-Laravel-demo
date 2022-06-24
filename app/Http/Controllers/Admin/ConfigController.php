<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\About;

class ConfigController extends Controller
{
    public function siteconfig()
    {
        $config = $this ->getConfig("siteconfig");
        // dd($config);
        return view("admin.config.siteconfig",compact("config"));
    }

    public function Information()
    {
        $config = $this ->getConfig("Information");
        // dd($config);
        return view("admin.config.Information",compact("config"));
    }

    public function getConfig($name)
    {
        $data = DB::table("configs") -> where("name",$name) ->first();
        if ($data){
            $config = $data->config;
            $config = json_decode($config);
        }else{
            $config = [];
        }
        return $config;
    }

//    @param Request $request

    public function store(Request $request)
    {
        $tablename = $request ->post("name");
        if($tablename == 'Information'){
            $validate =[
                "Class" => "required",
                "StudentName" => "required|max:10",
                "StudentID" => "required|numeric",
            ];
        }elseif ($tablename == 'siteconfig'){
            $validate =[
                "Webtitle" => "required|max:20",
                "keywords" => "required",
                "Describe" => "required|max:200"
            ];
        }
        $request ->validate($validate);
        $datas  = $request -> only("name","title");
        $config = $request -> except("_token","name","title");
        $config = json_encode($config);
        $datas['config'] = $config;
        $result = DB::table("configs") -> where("title","{$datas['title']}") ->first();
        // $result = DB::table("configs")->updateOrInsert(['title'=>'siteconfig'],$datas);

        if($result){
            $result = DB::table("configs") -> where("title","{$datas['title']}") ->update($datas);
        }else{
            $result = DB::table("configs") -> updateOrInsert($datas);
        }

        flash($result,"Database-update");

        return redirect(route("admin.config.{$tablename}"));
    }
}

<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsPost;
use App\Shop;
use App\About;
use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index()
    {
//        该功能是显示班级姓名学号
        $config = $this ->getConfig("Information");
//        渲染前端的首页界面
        $news = News::orderBy("id","desc") ->paginate(9);
        return view("home.index",compact("config","news"));
    }

    public function indexDetail($id)
    {
//        渲染前端的首页详情页界面
        $datas = News::find($id);
//        该功能是显示班级姓名学号
        $config = $this ->getConfig("Information");
        return view("home.indexDetail",compact("datas","config"));
    }

    public function recommend()
    {
//        渲染前端的推荐页面
        $data1 = DB::select("SELECT * FROM shops where id = 5");
        $data2 = Shop::paginate(5);
//        该功能是显示班级姓名学号
        $config = $this ->getConfig("Information");
        return view("home.recommend",compact("data1","data2","config"));
    }

    public function about()
    {
        // 渲染前端的关于我们界面
//        该功能是显示班级姓名学号
        $config = $this ->getConfig("Information");
        $config2 = $this ->getConfig("siteconfig");
        return view("home.about",compact("config","config2"));
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
}

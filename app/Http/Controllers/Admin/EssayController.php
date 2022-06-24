<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsPost;
use App\Shop;
use Illuminate\Support\Facades\DB;

class EssayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Shop::orderBy("id","desc")->paginate(10);
        return view("admin.essay.index",compact("datas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.essay.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            "title" =>"required|max:60",
            "description" =>"required|max:40",
            "clicked" =>"required|integer",
            "Content" => "required",
        ];

        $messages = [
            "title.required" =>"新闻标题不能为空",
            "clicked.integer"=>"浏览次数只能为整数"
        ];

        $request ->validate($rules,$messages);
        $Shops = new Shop();
        $Shops->title = $request->title;
        $Shops->description = $request->description;
        $Shops->clicked = $request->clicked;
        $Shops->ImagePath = $request->ImagePath;
        $Shops->Content = $request->Content;

        if($request ->ImagePath){
            $path = $request ->file("ImagePath")->store("img");
            $Shops->ImagePath = "/upload/".$path;
        }
        $result =$Shops ->save();

        flash($result,"Database-add");

        return redirect(route("admin.essay.create"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //显示文章管理列表的编辑页面
        $data = Shop::find($id);
        return view("admin.essay.Newsedit",compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //更新新闻页面
        $rules = [
            "title" =>"required|max:60",
            "description" =>"required|max:40",
            "clicked" =>"required|integer",
            "Content" => "required",
        ];

        $messages = [
            "title.required" =>"新闻标题不能为空",
            "clicked.integer"=>"浏览次数只能为整数"
        ];

        $request ->validate($rules,$messages);
        $Shops   = Shop::find($id);
        $Shops->title = $request->title;
        $Shops->description = $request->description;
        $Shops->clicked = $request->clicked;
        $Shops->ImagePath = $request->ImagePath;
        $Shops->Content = $request->Content;

        if($request ->ImagePath){
            $path = $request ->file("ImagePath")->store("img");
            $Shops->ImagePath = "/upload/".$path;
        }
//        保存
        $result =$Shops ->save();

        flash($result,"Database-update");

        return redirect(route("admin.essay.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除文章管理页面的记录
        $Shops   = Shop::find($id);
        $result = $Shops -> delete();
        flash($result,"Database-delete");

        return  redirect(route("admin.essay.index"));
    }
}

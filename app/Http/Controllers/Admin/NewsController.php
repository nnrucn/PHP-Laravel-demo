<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsPost;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = News::orderBy("id","desc")->paginate(10);
//        $datas = DB::table('news')     ->paginate(10);
        return view("admin.news.index",compact("datas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.news.create");
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
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->clicked = $request->clicked;
        $news->ImagePath = $request->ImagePath;
        $news->Content = $request->Content;

        if($request ->ImagePath){
            $path = $request ->file("ImagePath")->store("img");
            $news->ImagePath = "/upload/".$path;
        }
        $result =$news ->save();

        flash($result,"Database-add");

        return redirect(route("admin.news.create"));



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
        //显示新闻列表的编辑页面
//        dd($id);
        $data = News::find($id);
        return view("admin.news.Newsedit",compact("data"));
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

        $news   = News::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->clicked = $request->clicked;
        $news->ImagePath = $request->ImagePath;
        $news->Content = $request->Content;

        if($request ->ImagePath){
            $path = $request ->file("ImagePath")->store("img");
            $news->ImagePath = "/upload/".$path;
        }
//        保存
        $result =$news ->save();

        flash($result,"Database-update");

        return redirect(route("admin.news.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除新闻页面的记录
        $news   = News::find($id);
        $result = $news -> delete();

        flash($result,"Database-delete");

    return  redirect(route("admin.news.index"));

    }
}

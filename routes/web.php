<?php

use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

//前端的路由
Route::prefix("home") -> name("home.") ->group(function(){
//    前端-首页
    Route::get("index", "Home\IndexController@index")-> name("index");
//    前端-首页详情页
    Route::get("indexDetail/{id}", "Home\IndexController@indexDetail")-> name("indexDetail");
//    前端-推荐-页面
    Route::get("recommend", "Home\IndexController@recommend")-> name("recommend");
//    前端-关于我们-页面
    Route::get("about", "Home\IndexController@about")-> name("about");
});


//后台的路由
Route::prefix("admin") -> name("admin.") -> middleware(['auth','CheckUser'])->group(function(){
    Route::get("index", "Admin\IndexController@index")                  -> name("index");
    // 路由群组
    Route::prefix("config") -> name("config.") -> group(function(){
        Route::get("siteconfig", "Admin\ConfigController@siteconfig")   -> name("siteconfig");
        Route::get("Information", "Admin\ConfigController@Information") -> name("Information");
        Route::post("store","Admin\ConfigController@store")             -> name("store");
    });

    Route::resource("news","Admin\NewsController");
    Route::resource("essay","Admin\EssayController");
    Route::post("imgupload","Admin\uploadController@imgupload")->name("imgupload");
    Route::get("news/delete/{id}",'Admin\NewsController@destroy')->name("news.del");
    Route::get("essay/delete/{id}",'Admin\EssayController@destroy')->name("essay.del");
});

//            $result = DB::table("configs") ->where("id",2) -> first();
//            dump($result);


//后台登出路由
Route::get("/admin/logout","Admin\IndexController@logout")->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


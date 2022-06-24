<?php


//flash函数作用:
//对数据表进行增删改查操作,在数据闪存中存放相对应的提示信息
//$result  成功返回true  失败返回false
//$operator  增加是:add 删除是del 修改是update

function flash($result,$operator){
    switch ($operator){
        case "Database-add";
            if($result){
                $msg = ["msg" => "保存成功","class"=>"text-success","title"=>"提示:","type"=>"success"];
            }else{
                $msg = ["msg" => "保存失败","class"=>"text-danger","title"=>"提示:","type"=>"error"];
            }
            break;
            case "Database-delete";
                if($result){
                    $msg = ["msg" => "删除成功","class"=>"text-success","title"=>"提示:","type"=>"success"];
                }else{
                    $msg = ["msg" => "删除失败","class"=>"text-danger","title"=>"提示:","type"=>"error"];
                }
                break;
        case "Database-update";
            if($result){
                $msg = ["msg" => "修改成功","class"=>"text-success","title"=>"提示:","type"=>"success"];
            }else{
                $msg = ["msg" => "修改失败","class"=>"text-danger","title"=>"提示:","type"=>"error"];
            }
            break;
    }
    request()-> session() ->flash("status",$msg);
}

function showFlash(){

//    用法  {{ showFlash() }}

    if(session()->has("status")){
        echo '<div id="app"  class="alert'.session('status')['class'].'">';
        echo '<el-alert title="'.session('status')['title'].'"  type="'.session('status')['type'].'"  description="'.session('status')['msg'].'" show-icon>';
        echo '</el-alert>';
        echo '</div>';
    }

echo<<<EOF
<!--挂载vue的app-->
    <script>
    var Main = {};
    const app = Vue.createApp(Main);
    app.use(ElementPlus);
    app.mount("#app");
    </script>
EOF;

}

function BootstrapCDN(){
echo <<<EOF
<link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
<script src="/static/admin/js/bootstrap/jquery.slim.min.js"></script>
<script src="/static/admin/js/bootstrap/bootstrap.bundle.min.js"></script>
EOF;
}

function css1(){
echo <<<EOF
<form class="forms-sample" method="post" action="{{route('admin.config.store')}}">
<input type="hidden" name="name" id="name" value="Information">
<input type="hidden" name="title" id="title" value="基本配置">
</form>
EOF;
}


?>

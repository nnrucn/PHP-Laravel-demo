<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table ->string("title",100) ->comment("新闻标题");
            $table ->text("description") ->comment("新闻摘要");
            $table ->integer("clicked") ->comment("浏览次数");
            $table ->string("ImagePath",150) ->comment("缩略图路径");
            $table ->text("Content") ->comment("新闻内容");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
}

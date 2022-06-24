<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table ->string("name",60)   -> unique() -> default("") -> comment("英文名称");

            $table ->string("title",60) -> unique() -> default("") -> comment("中文名称");
            
            $table ->text("config")     -> comment("配置信息");;

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
        Schema::dropIfExists('configs'); 
    }
}

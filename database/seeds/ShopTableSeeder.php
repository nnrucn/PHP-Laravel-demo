<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a = 0; $a < 30; $a++) {

            $data[] = [
                "title" => Str::random(20),
                "description" => Str::random(50),
                "clicked" => mt_rand(100, 200),
                "ImagePath" => "",
                "Content" => Str::random(200),
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ];
        }
        DB::table("shop")->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsTableSeeder extends Seeder
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
                "content" => Str::random(200),
                "created_at" => date("Y-m-d H:i:s"),
                "updated_at" => date("Y-m-d H:i:s")
            ];
        }
        DB::table("about")->insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\About::class,30) ->create();
//        $this->call(AboutsTableSeeder::class);
//        factory(\App\News::class,30) ->create();
    }
}

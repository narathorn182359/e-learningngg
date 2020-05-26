<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class YoutubeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_youtube')->insert([
            'linkyoutube' => "https://www.youtube.com/embed/KiFZz5aJsl0",

        ]);
    }
}

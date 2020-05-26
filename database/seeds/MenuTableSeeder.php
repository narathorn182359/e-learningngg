<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_admin')->insert([
            'url' => "/produc",
            'name' => "จัดการวิชา",
            'icon' => "-",
        ]);

        DB::table('menu_admin')->insert([
            'url' => "/category",
            'name' => "จัดการหมวดหมู่",
            'icon' => "-",
        ]);
        DB::table('menu_admin')->insert([
            'url' => "/subcategory",
            'name' => "จัดการหลักสูตร",
            'icon' => "-",
        ]);
        DB::table('menu_admin')->insert([
            'url' => "/article",
            'name' => "จัดการบทความ",
            'icon' => "-",
        ]);
        DB::table('menu_admin')->insert([
            'url' => "/newsinka",
            'name' => "จัดการสินค้า",
            'icon' => "-",
        ]);
        DB::table('menu_admin')->insert([
            'url' => "/sinka",
            'name' => "จัดการแบนเนอร์",
            'icon' => "-",
        ]);
        DB::table('menu_admin')->insert([
            'url' => "/job",
            'name' => "สมัครงาน",
            'icon' => "-",
        ]);
        DB::table('menu_admin')->insert([
            'url' => "/emppp",
            'name' => "จัดการพนักงาน",
            'icon' => "-",
        ]);

        DB::table('menu_admin')->insert([
            'url' => "/youtube",
            'name' => "YOUTUBE หน้าแรก",
            'icon' => "-",
        ]);


        DB::table('menu_admin')->insert([
            'url' => "/producX",
            'name' => "คลาสเรียน",
            'icon' => "-",
        ]);


    }
}

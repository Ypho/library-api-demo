<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Fantasy']);
        DB::table('categories')->insert(['name' => 'Science Fiction']);
        DB::table('categories')->insert(['name' => 'Romance']);
        DB::table('categories')->insert(['name' => 'Novella']);
        DB::table('categories')->insert(['name' => 'Crime']);
        DB::table('categories')->insert(['name' => 'Children']);
        DB::table('categories')->insert(['name' => 'Comic']);
        DB::table('categories')->insert(['name' => 'Horror']);
        DB::table('categories')->insert(['name' => 'Thriller']);
        DB::table('categories')->insert(['name' => 'Biography']);
    }
}

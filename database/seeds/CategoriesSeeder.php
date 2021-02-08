<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $path = public_path('stories.sql');
        $sql = file_get_contents($path);
        print ($path);
        DB::unprepared($sql);
    }
}

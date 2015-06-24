<?php


class CabinsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('cabins')->delete();
        DB::unprepared(file_get_contents('dummies/cabins.sql'));
    }
}
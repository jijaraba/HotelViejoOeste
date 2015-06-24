<?php

class PlansTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('plans')->delete();
        Plan::create(array(
            'idcabin' => 1,
            'name' => 'Plan Sheriff',
            'rate' => 100,
            'starts' => '2015-04-03',
            'ends' => '2015-05-03'
        ));
        Plan::create(array(
            'idcabin' => 1,
            'name' => 'Plan Vaquero',
            'rate' => 150,
            'starts' => '2015-04-03',
            'ends' => '2015-05-03'
        ));
    }

}
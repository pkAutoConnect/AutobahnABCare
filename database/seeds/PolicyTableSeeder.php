<?php

namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PolicyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

//        DB::table('policies')->delete();

        Policy::create(array(

            'name' => str_random(10),
            'premium' => '10000'
//            'cartype' => 'skoda',
//            'vin' => str_random(15),
//            'engine' => str_random(12),
//            'salesexecid' => '1',
//            'mobile' => '981234567',
//            'email' => str_random(10) . '@gmail.com',
        ));
    }
}

<?php

use Illuminate\Database\Seeder;

class seedShareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

//        for($i=1;$i<21;$i++){


// DB::table('shares')->insert([
// 'name'=>str_random(10),
// 'symobol'=>str_random(9),
// 'count'=>rand(11,99)



// 	]
// 	);

//        }




    	factory('App\Share',20)->create();
    }
}

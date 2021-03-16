<?php

use Illuminate\Database\Seeder;

class EventTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_types')->delete();
        
        \DB::table('event_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'prefix_word' => '時の総理大臣は',
                'pattern' => 1,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:53',
                'updated_at' => '2020-04-16 21:36:42',
            ),
            1 => 
            array (
                'id' => 2,
                'prefix_word' => '　',
                'pattern' => 2,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:37:26',
                'updated_at' => '2020-04-16 21:37:26',
            ),
            2 => 
            array (
                'id' => 3,
                'prefix_word' => 'この時代は',
                'pattern' => 3,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:37:43',
                'updated_at' => '2020-04-16 21:37:43',
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '日本',
                'code' => 'JP',
                'created_at' => '2020-04-16 21:34:02',
                'updated_at' => '2020-04-16 21:34:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '米国',
                'code' => 'US',
                'created_at' => '2020-04-16 21:34:31',
                'updated_at' => '2020-04-16 21:34:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'イギリス',
                'code' => 'EN',
                'created_at' => '2020-04-16 21:34:49',
                'updated_at' => '2020-04-16 21:34:49',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '中国',
                'code' => 'CN',
                'created_at' => '2020-04-16 21:35:14',
                'updated_at' => '2020-04-16 21:35:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ベトナム',
                'code' => 'VN',
                'created_at' => '2020-04-16 21:35:28',
                'updated_at' => '2020-04-16 21:35:28',
            ),
        ));
        
        
    }
}
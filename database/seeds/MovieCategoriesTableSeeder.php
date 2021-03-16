<?php

use Illuminate\Database\Seeder;

class MovieCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movie_categories')->delete();
        
        \DB::table('movie_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_name' => 'ドラマ/サスペンス',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_name' => 'ロマンス/コメディ/音楽劇',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'category_name' => '西部劇/戦争/冒険活劇',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'category_name' => 'a',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
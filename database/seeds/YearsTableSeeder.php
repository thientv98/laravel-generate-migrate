<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('years')->delete();
        
        \DB::table('years')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '９５歳～９９歳',
                'val' => 99,
                'img_1' => 'V6eZolWcz_music_1.jpg',
                'img_2' => '4cshpqf3W_music_2.jpg',
                'img_3' => 'z9NjNxdel_music_3.jpg',
                'img_4' => 'wk9F0Ag6Z_music_4.jpg',
                'img_5' => 'QAdLBRbWi_music_5.jpg',
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-27 22:30:20',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '９０歳～９４歳',
                'val' => 94,
                'img_1' => NULL,
                'img_2' => NULL,
                'img_3' => NULL,
                'img_4' => NULL,
                'img_5' => NULL,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-16 21:19:03',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '８５歳～８９歳',
                'val' => 89,
                'img_1' => NULL,
                'img_2' => NULL,
                'img_3' => NULL,
                'img_4' => NULL,
                'img_5' => NULL,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-16 21:22:42',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '８０歳～８４歳',
                'val' => 84,
                'img_1' => NULL,
                'img_2' => NULL,
                'img_3' => NULL,
                'img_4' => NULL,
                'img_5' => NULL,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-16 21:20:02',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '７５歳～７９歳',
                'val' => 79,
                'img_1' => NULL,
                'img_2' => NULL,
                'img_3' => NULL,
                'img_4' => NULL,
                'img_5' => NULL,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-16 21:20:33',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '７０歳～７４歳',
                'val' => 74,
                'img_1' => NULL,
                'img_2' => NULL,
                'img_3' => NULL,
                'img_4' => NULL,
                'img_5' => NULL,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-16 21:21:08',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => '６５歳~６９歳',
                'val' => 69,
                'img_1' => NULL,
                'img_2' => NULL,
                'img_3' => NULL,
                'img_4' => NULL,
                'img_5' => NULL,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-16 21:21:40',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => '６０歳～６４歳',
                'val' => 64,
                'img_1' => NULL,
                'img_2' => NULL,
                'img_3' => NULL,
                'img_4' => NULL,
                'img_5' => NULL,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:57',
                'updated_at' => '2020-04-16 21:22:16',
            ),
        ));
        
        
    }
}
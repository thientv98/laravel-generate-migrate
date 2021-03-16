<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event_types_id' => 1,
                'year' => 1931,
                'content' => '田中太郎９９',
                'suffix_word' => 'でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:51',
                'updated_at' => '2020-05-15 19:47:51',
            ),
            1 => 
            array (
                'id' => 2,
                'event_types_id' => 2,
                'year' => 1931,
                'content' => 'ブーム９９',
                'suffix_word' => 'が大流行りな時代でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            2 => 
            array (
                'id' => 3,
                'event_types_id' => 3,
                'year' => 1931,
                'content' => '９９事件',
                'suffix_word' => 'がありましたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            3 => 
            array (
                'id' => 4,
                'event_types_id' => 1,
                'year' => 1932,
                'content' => '田中太郎９８',
                'suffix_word' => 'でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            4 => 
            array (
                'id' => 5,
                'event_types_id' => 2,
                'year' => 1932,
                'content' => 'ブーム９８',
                'suffix_word' => 'が大流行りな時代でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            5 => 
            array (
                'id' => 6,
                'event_types_id' => 3,
                'year' => 1932,
                'content' => '９８事件',
                'suffix_word' => 'がありましたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            6 => 
            array (
                'id' => 7,
                'event_types_id' => 1,
                'year' => 1933,
                'content' => '田中太郎９７',
                'suffix_word' => 'でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            7 => 
            array (
                'id' => 8,
                'event_types_id' => 2,
                'year' => 1933,
                'content' => 'ブーム９７',
                'suffix_word' => 'が大流行りな時代でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            8 => 
            array (
                'id' => 9,
                'event_types_id' => 3,
                'year' => 1933,
                'content' => '９７事件',
                'suffix_word' => 'がありましたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:52',
                'updated_at' => '2020-05-15 19:47:52',
            ),
            9 => 
            array (
                'id' => 10,
                'event_types_id' => 1,
                'year' => 1934,
                'content' => '田中太郎９６',
                'suffix_word' => 'でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:53',
                'updated_at' => '2020-05-15 19:47:53',
            ),
            10 => 
            array (
                'id' => 11,
                'event_types_id' => 2,
                'year' => 1934,
                'content' => 'ブーム９６',
                'suffix_word' => 'が大流行りな時代でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:53',
                'updated_at' => '2020-05-15 19:47:53',
            ),
            11 => 
            array (
                'id' => 12,
                'event_types_id' => 3,
                'year' => 1934,
                'content' => '９６事件',
                'suffix_word' => 'がありましたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:53',
                'updated_at' => '2020-05-15 19:47:53',
            ),
            12 => 
            array (
                'id' => 13,
                'event_types_id' => 1,
                'year' => 1935,
                'content' => '田中太郎９５',
                'suffix_word' => 'でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:53',
                'updated_at' => '2020-05-15 19:47:53',
            ),
            13 => 
            array (
                'id' => 14,
                'event_types_id' => 2,
                'year' => 1935,
                'content' => 'ブーム９５',
                'suffix_word' => 'が大流行りな時代でしたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:53',
                'updated_at' => '2020-05-15 19:47:53',
            ),
            14 => 
            array (
                'id' => 15,
                'event_types_id' => 3,
                'year' => 1935,
                'content' => '９５事件',
                'suffix_word' => 'がありましたね！',
                'del_flg' => 0,
                'created_at' => '2020-05-15 19:47:53',
                'updated_at' => '2020-05-15 19:47:53',
            ),
        ));
        
        
    }
}
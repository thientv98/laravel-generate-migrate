<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => '誰の曲か、わかりましたか？',
                'media_type' => 0,
                'pattern' => 0,
                'order_no' => 1,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:55',
                'updated_at' => '2020-04-16 20:57:02',
            ),
            1 => 
            array (
                'id' => 2,
                'content' => 'そうですね！<br/>
:singerさんの:songという曲でしたね！',
                'media_type' => 0,
                'pattern' => 0,
                'order_no' => 2,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:55',
                'updated_at' => '2020-04-16 20:58:27',
            ),
            2 => 
            array (
                'id' => 3,
                'content' => ':prefix_word:event_content:suffix_word',
                'media_type' => 0,
                'pattern' => 1,
                'order_no' => 3,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:55',
                'updated_at' => '2020-04-16 21:04:30',
            ),
            3 => 
            array (
                'id' => 4,
                'content' => ':prefix_word:event_content:suffix_word',
                'media_type' => 0,
                'pattern' => 2,
                'order_no' => 3,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:55',
                'updated_at' => '2020-04-16 21:05:28',
            ),
            4 => 
            array (
                'id' => 5,
                'content' => ':prefix_word:event_content:suffix_word',
                'media_type' => 0,
                'pattern' => 3,
                'order_no' => 3,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:55',
                'updated_at' => '2020-04-16 21:05:56',
            ),
            5 => 
            array (
                'id' => 6,
                'content' => 'じゃあ、次の曲を流します！',
                'media_type' => 0,
                'pattern' => 0,
                'order_no' => 4,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:55',
                'updated_at' => '2020-04-16 21:08:19',
            ),
            6 => 
            array (
                'id' => 7,
                'content' => '懐かしい音楽がありましたか？',
                'media_type' => 0,
                'pattern' => 0,
                'order_no' => 5,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:55',
                'updated_at' => '2020-04-16 21:09:00',
            ),
            7 => 
            array (
                'id' => 8,
                'content' => '映画のタイトルは、わかりましたか？',
                'media_type' => 1,
                'pattern' => 0,
                'order_no' => 1,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:56',
                'updated_at' => '2020-04-25 00:21:55',
            ),
            8 => 
            array (
                'id' => 9,
                'content' => 'そうですね:titleという映画でしたね監督は監督名で:actor_1と:actor_2が出演していました。',
                'media_type' => 1,
                'pattern' => 0,
                'order_no' => 2,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:12:33',
                'updated_at' => '2020-04-25 00:49:00',
            ),
            9 => 
            array (
                'id' => 10,
                'content' => ':prefix_word:event_content:suffix_word',
                'media_type' => 1,
                'pattern' => 1,
                'order_no' => 3,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:14:05',
                'updated_at' => '2020-04-16 21:14:05',
            ),
            10 => 
            array (
                'id' => 11,
                'content' => ':prefix_word:event_content:suffix_word',
                'media_type' => 1,
                'pattern' => 2,
                'order_no' => 3,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:14:30',
                'updated_at' => '2020-04-16 21:14:30',
            ),
            11 => 
            array (
                'id' => 12,
                'content' => ':prefix_word:event_content:suffix_word',
                'media_type' => 1,
                'pattern' => 3,
                'order_no' => 3,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:14:45',
                'updated_at' => '2020-04-16 21:14:45',
            ),
            12 => 
            array (
                'id' => 13,
                'content' => 'じゃあ、次の映画を流します！',
                'media_type' => 1,
                'pattern' => 0,
                'order_no' => 4,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:15:50',
                'updated_at' => '2020-04-16 21:15:50',
            ),
            13 => 
            array (
                'id' => 14,
                'content' => '懐かしい映画はありましたか？',
                'media_type' => 1,
                'pattern' => 0,
                'order_no' => 5,
                'del_flg' => 0,
                'created_at' => '2020-04-16 21:16:20',
                'updated_at' => '2020-04-16 21:16:20',
            ),
            14 => 
            array (
                'id' => 15,
                'content' => 'a',
                'media_type' => 0,
                'pattern' => 0,
                'order_no' => 6,
                'del_flg' => 0,
                'created_at' => '2020-06-08 04:42:10',
                'updated_at' => '2020-06-08 04:42:10',
            ),
            15 => 
            array (
                'id' => 16,
                'content' => '1',
                'media_type' => 0,
                'pattern' => 0,
                'order_no' => 7,
                'del_flg' => 0,
                'created_at' => '2020-06-08 04:46:20',
                'updated_at' => '2020-06-08 04:46:20',
            ),
        ));
        
        
    }
}
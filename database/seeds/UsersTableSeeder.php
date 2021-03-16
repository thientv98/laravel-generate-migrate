<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Systra',
                'email' => 'binh@systra.co.jp',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3oJa3oc8D6uCFU0FFXgSjePheRsTG4aN1ML6C.9pH7/DiuCJgAaBm',
                'remember_token' => NULL,
                'admin_flg' => 1,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:53',
                'updated_at' => '2020-04-16 08:46:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cXmF.f3l58w8RjJxq2Vc9uI7RYjeoJjDMQfVTkAujp7AY5nzjuStm',
                'remember_token' => NULL,
                'admin_flg' => 1,
                'del_flg' => 0,
                'created_at' => '2020-04-16 08:46:53',
                'updated_at' => '2020-04-16 08:46:53',
            ),
        ));
        
        
    }
}
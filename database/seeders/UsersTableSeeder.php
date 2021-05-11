<?php

namespace Database\Seeders;

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
                'name' => 'Muhammad Rafif Habibillah',
                'email' => 'rafifhabibillah354@gmail.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('Qwerty123'),
                'level' => 'administrator',
                'remember_token' => NULL,
                'created_at' => '2021-05-01 21:36:17',
                'updated_at' => '2021-05-01 21:36:17',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'coba',
                'email' => 'coba@coba.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('qwerty'),
                'level' => 'contributor',
                'remember_token' => NULL,
                'created_at' => '2021-05-01 21:37:38',
                'updated_at' => '2021-05-01 21:37:38',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => bcrypt('qwerty'),
                'level' => 'contributor',
                'remember_token' => NULL,
                'created_at' => '2021-05-01 21:39:03',
                'updated_at' => '2021-05-01 21:39:03',
            ),
        ));
        
        
    }
}
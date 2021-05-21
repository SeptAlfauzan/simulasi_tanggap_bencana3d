<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ScenesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scenes')->delete();
        
        \DB::table('scenes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 4,
                'nama' => 'percobaan ini telah ',
                'deleted_at' => NULL,
                'created_at' => '2021-05-03 14:55:29',
                'updated_at' => '2021-05-15 13:01:03',
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 4,
                'nama' => 'tes',
                'deleted_at' => NULL,
                'created_at' => '2021-05-05 07:23:39',
                'updated_at' => '2021-05-05 07:23:39',
            ),
            2 => 
            array (
                'id' => 3,
                'author_id' => 4,
                'nama' => 'gempa bumi',
                'deleted_at' => NULL,
                'created_at' => '2021-05-05 07:26:37',
                'updated_at' => '2021-05-12 06:58:38',
            ),
            3 => 
            array (
                'id' => 4,
                'author_id' => 4,
                'nama' => 'asd',
                'deleted_at' => NULL,
                'created_at' => '2021-05-09 03:35:22',
                'updated_at' => '2021-05-09 03:35:22',
            ),
            4 => 
            array (
                'id' => 5,
                'author_id' => 4,
                'nama' => 'asd',
                'deleted_at' => NULL,
                'created_at' => '2021-05-09 03:35:38',
                'updated_at' => '2021-05-12 06:58:22',
            ),
            5 => 
            array (
                'id' => 6,
                'author_id' => 4,
                'nama' => 'Jojo Bizzare Adventure',
                'deleted_at' => NULL,
                'created_at' => '2021-05-12 01:13:02',
                'updated_at' => '2021-05-15 18:11:50',
            ),
            6 => 
            array (
                'id' => 7,
                'author_id' => 4,
                'nama' => 'Hello world',
                'deleted_at' => '2021-05-12 06:57:44',
                'created_at' => '2021-05-12 06:57:27',
                'updated_at' => '2021-05-12 06:57:44',
            ),
        ));
        
        
    }
}
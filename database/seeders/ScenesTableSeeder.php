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
                'nama' => 'percobaan ini telah diedit',
                'created_at' => '2021-05-03 14:55:29',
                'updated_at' => '2021-05-09 06:09:01',
            ),
            1 => 
            array (
                'id' => 2,
                'author_id' => 4,
                'nama' => 'tes',
                'created_at' => '2021-05-05 07:23:39',
                'updated_at' => '2021-05-05 07:23:39',
            ),
            2 => 
            array (
                'id' => 3,
                'author_id' => 4,
                'nama' => 'gempa bumi',
                'created_at' => '2021-05-05 07:26:37',
                'updated_at' => '2021-05-05 07:26:37',
            ),
            3 => 
            array (
                'id' => 4,
                'author_id' => 4,
                'nama' => 'asd',
                'created_at' => '2021-05-09 03:35:22',
                'updated_at' => '2021-05-09 03:35:22',
            ),
            4 => 
            array (
                'id' => 5,
                'author_id' => 4,
                'nama' => 'asd',
                'created_at' => '2021-05-09 03:35:38',
                'updated_at' => '2021-05-09 03:35:38',
            ),
        ));
        
        
    }
}
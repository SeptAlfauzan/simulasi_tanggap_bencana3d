<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScenesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('scenes')->delete();
        
        DB::table('scenes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'author_id' => 4,
                'nama' => 'percobaan',
                'created_at' => '2021-05-03 14:55:29',
                'updated_at' => '2021-05-03 14:55:29',
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
        ));
        
        
    }
}
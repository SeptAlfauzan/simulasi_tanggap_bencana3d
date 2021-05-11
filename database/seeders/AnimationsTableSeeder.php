<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnimationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('animations')->delete();
        
        \DB::table('animations')->insert(array (
            0 => 
            array (
                'id' => 3,
                'position' => 1,
                'scenes_id' => 1,
                'path' => '/file-1620447402.gltf',
                'scale' => 25.8,
                'background_color' => '0xff0000',
                'description' => 'asdasd asdsad asdasd asdasd',
                'author_id' => 1,
                'created_at' => '2021-05-03 15:30:15',
                'updated_at' => '2021-05-09 23:01:22',
            ),
            1 => 
            array (
                'id' => 4,
                'position' => 1,
                'scenes_id' => 3,
                'path' => '/file-1620057648.gltf',
                'scale' => 1.0,
                'background_color' => '0x34e7f3',
                'description' => 'lorem ipsum ipsum asdasd',
                'author_id' => 4,
                'created_at' => '2021-05-03 16:00:48',
                'updated_at' => '2021-05-09 04:21:14',
            ),
            2 => 
            array (
                'id' => 7,
                'position' => 2,
                'scenes_id' => 1,
                'path' => '/file-1620483082.gltf',
                'scale' => 1.0,
                'background_color' => '0x000000',
                'description' => 'tes lorem lorem',
                'author_id' => 4,
                'created_at' => '2021-05-05 07:29:59',
                'updated_at' => '2021-05-09 23:01:22',
            ),
            3 => 
            array (
                'id' => 8,
                'position' => 1,
                'scenes_id' => 2,
                'path' => '/file-1620262916.gltf',
                'scale' => 11.8,
                'background_color' => '0xff0e0e',
                'description' => 'tes',
                'author_id' => 4,
                'created_at' => '2021-05-06 01:01:56',
                'updated_at' => '2021-05-09 04:21:14',
            ),
        ));
        
        
    }
}
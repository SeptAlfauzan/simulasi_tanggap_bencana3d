<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('animations')->delete();
        
        DB::table('animations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'scenes_id' => 1,
                'path' => '/file-1620055391.gltf',
                'scale' => 1.0,
                'background_color' => '',
                'description' => 'asdasd',
                'author_id' => 4,
                'created_at' => '2021-05-03 15:23:11',
                'updated_at' => '2021-05-03 15:23:11',
            ),
            1 => 
            array (
                'id' => 2,
                'scenes_id' => 1,
                'path' => '/file-1620055771.gltf',
                'scale' => 1.0,
                'background_color' => '',
                'description' => 'asdasd',
                'author_id' => 4,
                'created_at' => '2021-05-03 15:29:31',
                'updated_at' => '2021-05-03 15:29:31',
            ),
            2 => 
            array (
                'id' => 3,
                'scenes_id' => 1,
                'path' => '/file-1620055815.gltf',
                'scale' => 1.0,
                'background_color' => '',
                'description' => 'asdasd asdsad',
                'author_id' => 4,
                'created_at' => '2021-05-03 15:30:15',
                'updated_at' => '2021-05-03 15:30:15',
            ),
            3 => 
            array (
                'id' => 4,
                'scenes_id' => 1,
                'path' => '/file-1620057648.gltf',
                'scale' => 1.0,
                'background_color' => '',
                'description' => 'asd',
                'author_id' => 4,
                'created_at' => '2021-05-03 16:00:48',
                'updated_at' => '2021-05-03 16:00:48',
            ),
            4 => 
            array (
                'id' => 5,
                'scenes_id' => 1,
                'path' => '/file-1620057827.gltf',
                'scale' => 1.0,
                'background_color' => '',
                'description' => 'asd',
                'author_id' => 4,
                'created_at' => '2021-05-03 16:03:47',
                'updated_at' => '2021-05-03 16:03:47',
            ),
            5 => 
            array (
                'id' => 6,
                'scenes_id' => 1,
                'path' => '/file-1620199752.gltf',
                'scale' => 1.0,
                'background_color' => '',
                'description' => 'tes',
                'author_id' => 4,
                'created_at' => '2021-05-05 07:29:12',
                'updated_at' => '2021-05-05 07:29:12',
            ),
            6 => 
            array (
                'id' => 7,
                'scenes_id' => 1,
                'path' => '/file-1620199799.gltf',
                'scale' => 1.0,
                'background_color' => '',
                'description' => 'tes',
                'author_id' => 4,
                'created_at' => '2021-05-05 07:29:59',
                'updated_at' => '2021-05-05 07:29:59',
            ),
        ));
        
        
    }
}
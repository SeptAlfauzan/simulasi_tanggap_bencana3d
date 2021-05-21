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
                'password' => '$2y$10$bvhM1WCAmSNuA.3vbiWaaeNw9UyGO1b8BM5fAt/Edogkav/po5MZ.',
                'level' => 'administrator',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-05-01 21:36:17',
                'updated_at' => '2021-05-15 17:17:56',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'coba',
                'email' => 'coba@coba.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dfkP0v2BdRK0xfIhzBMXR.I5ltCrFFSbOxFeqJ0iKX2CWZ7MH.9ai',
                'level' => 'administrator',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-05-01 21:37:38',
                'updated_at' => '2021-05-01 21:37:38',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DgItqZWzsbBwFm0k6K.jT.a8xRms.6BnINL9ViUvJmsVRTYX.5.lS',
                'level' => 'administrator',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-05-01 21:39:03',
                'updated_at' => '2021-05-15 18:23:12',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => '082132351498',
                'email' => 'alfauzansepta@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JQq5r.VSBzJ9OXudl8xyXe2ZirAOeiIyQZFs7lTLxXTJODGRakFUu',
                'level' => 'contributor',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-05-13 17:16:23',
                'updated_at' => '2021-05-15 18:39:40',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => '082132351498',
                'email' => 'alfauzanseptaasd@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5NstBxEeN4UoTP58k3UolO42uyak85OSb9Xk7FJWFVhVw0jvOj3IS',
                'level' => 'administrator',
                'remember_token' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2021-05-15 17:34:22',
                'updated_at' => '2021-05-15 18:39:42',
            ),
        ));
        
        
    }
}
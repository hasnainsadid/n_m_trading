<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CacheTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cache')->delete();
        
        \DB::table('cache')->insert(array (
            0 => 
            array (
                'key' => 'fb6f3f3e6cd1eef80b0cb863c26af4f5',
                'value' => 'i:2;',
                'expiration' => 1734900658,
            ),
            1 => 
            array (
                'key' => 'fb6f3f3e6cd1eef80b0cb863c26af4f5:timer',
                'value' => 'i:1734900658;',
                'expiration' => 1734900658,
            ),
        ));
        
        
    }
}
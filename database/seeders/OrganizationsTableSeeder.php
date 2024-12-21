<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizations')->delete();
        
        \DB::table('organizations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Maa Enterprise',
                'address' => 'Moghbazar, Dhaka - 1212',
                'bin_no' => '3216542541-0212',
                'created_at' => '2024-12-19 16:42:29',
                'updated_at' => '2024-12-19 16:42:29',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Nijhum Motors',
                'address' => 'Kakrail, Dhaka - 1212',
                'bin_no' => '51248330-5269',
                'created_at' => '2024-12-19 16:53:06',
                'updated_at' => '2024-12-19 16:53:06',
            ),
        ));
        
        
    }
}
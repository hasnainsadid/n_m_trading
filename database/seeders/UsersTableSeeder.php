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
                'name' => 'Hasnain Sadid',
                'email' => 'hasnainsadid@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$GgJIx8bf3rB3kaJTPK/Zs..CylLL4lOnfSH1UJ4QIUs8pfxHKIcM6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => 'fpt4ebcrfMF9akoY7xfYwjitc5BfjwU0WTtjv9CYd1gE5biN8RQgZFX4vGmr',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-12-16 15:37:19',
                'updated_at' => '2024-12-16 15:37:19',
            ),
        ));
        
        
    }
}
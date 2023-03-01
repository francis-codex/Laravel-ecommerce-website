<?php

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
                'full_name' => 'John Doe',
                'email' => 'john@examle.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 1,
                'phone' => '01711001133',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            1 => 
            array (
                'id' => 2,
                'full_name' => 'Shakib Mostahid',
                'email' => 'b@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 2,
                'phone' => '01922991100',
                'created_at' => '2019-02-11',
                'updated_at' => '2019-02-11',
            ),
            2 => 
            array (
                'id' => 3,
                'full_name' => 'Nishat Ashraf',
                'email' => 'c@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 3,
                'phone' => '01899001144',
                'created_at' => '2019-02-11',
                'updated_at' => '2019-02-11',
            ),
            3 => 
            array (
                'id' => 4,
                'full_name' => 'Ayomi Hridy',
                'email' => 'd@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 4,
                'phone' => '0111111111',
                'created_at' => '2019-02-11',
                'updated_at' => '2019-02-11',
            ),
        ));
        
        
    }
}
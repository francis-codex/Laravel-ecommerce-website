<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Computer',
                'type' => 'PC, Laptop',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Smart Phone',
                'type' => 'All smartphones',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Headphone',
                'type' => 'All headphones',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Camera',
                'type' => 'All cameras',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Powerbank',
                'type' => 'All powerbanks',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Gaming',
                'type' => 'All gaming accessories',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Tab',
                'type' => 'All tabs',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Smartwatch',
                'type' => 'All smartwatches',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Speaker',
                'type' => 'All speakers',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-09',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Accessory',
                'type' => 'All accessories',
                'created_at' => '2019-02-09',
                'updated_at' => '2019-02-10',
            ),
        ));
        
        
    }
}
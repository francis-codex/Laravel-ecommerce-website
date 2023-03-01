<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sales')->delete();
        
        \DB::table('sales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'product_id' => '3:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 91000,
                'created_at' => '2019-02-02 07:32:33',
                'updated_at' => '2019-02-11',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'product_id' => '5:1:#c0c0c0:1,30:2:#000000:2',
                'order_status' => 'Delivered',
                'price' => 93000,
                'created_at' => '2019-02-11 14:12:27',
                'updated_at' => '2019-02-11',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'product_id' => '22:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 43999,
                'created_at' => '2019-02-07 16:29:16',
                'updated_at' => '2019-02-11',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'product_id' => '18:2:#000000:1,38:1:#8080ff:2,30:1:#000000:3',
                'order_status' => 'On Process',
                'price' => 209998,
                'created_at' => '2019-02-06 12:05:30',
                'updated_at' => '2019-02-11',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 4,
                'product_id' => '12:1:#000000:2,17:1:#c0c0c0:3',
                'order_status' => 'On Process',
                'price' => 79500,
                'created_at' => '2019-02-11 16:56:54',
                'updated_at' => '2019-02-11',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 4,
                'product_id' => '5:1:#c0c0c0:1',
                'order_status' => 'Cancel',
                'price' => 71000,
                'created_at' => '2019-02-11 17:07:40',
                'updated_at' => '2019-02-11',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'product_id' => '1:1:#c0c0c0:1',
                'order_status' => 'Placed',
                'price' => 205000,
                'created_at' => '2019-02-05 12:24:53',
                'updated_at' => '2019-02-11',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 2,
                'product_id' => '20:1:#000000:1,25:1:#000000:2',
                'order_status' => 'Delivered',
                'price' => 21500,
                'created_at' => '2019-02-13 09:51:07',
                'updated_at' => '2019-02-11',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 2,
                'product_id' => '27:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 30000,
                'created_at' => '2019-02-10 07:33:46',
                'updated_at' => '2019-02-11',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 2,
                'product_id' => '44:1:#ff0000:1',
                'order_status' => 'Cancel',
                'price' => 3500,
                'created_at' => '2019-02-11 17:09:12',
                'updated_at' => '2019-02-11',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 2,
                'product_id' => '28:1:#400080:1',
                'order_status' => 'On Process',
                'price' => 24000,
                'created_at' => '2019-02-11 17:09:49',
                'updated_at' => '2019-02-11',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'product_id' => '34:1:#ff0000:1',
                'order_status' => 'Delivered',
                'price' => 10500,
                'created_at' => '2019-02-05 04:55:26',
                'updated_at' => '2019-02-11',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 1,
                'product_id' => '4:1:#c0c0c0:1',
                'order_status' => 'On Process',
                'price' => 111000,
                'created_at' => '2019-02-14 20:54:08',
                'updated_at' => '2019-02-14',
            ),
        ));
        
        
    }
}
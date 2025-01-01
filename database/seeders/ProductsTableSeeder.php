<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'organization_id' => 2,
                'product_name' => 'Computer Monitor',
                'buyer_name' => 'Lg',
                'buyer_address' => 'South Korea',
                'buyer_bin_no' => '00219945-20192',
                'stock_unit' => 193,
                'stock_price' => 85000,
                'created_at' => '2024-12-22 17:26:27',
                'updated_at' => '2024-12-28 19:22:13',
            ),
            1 => 
            array (
                'id' => 2,
                'organization_id' => 3,
                'product_name' => 'Tail Light',
                'buyer_name' => 'Yamaha Motors',
                'buyer_address' => 'Japan',
                'buyer_bin_no' => '13778500-22540',
                'stock_unit' => 0,
                'stock_price' => 0,
                'created_at' => '2024-12-22 17:32:33',
                'updated_at' => '2024-12-22 17:32:33',
            ),
        ));
        
        
    }
}
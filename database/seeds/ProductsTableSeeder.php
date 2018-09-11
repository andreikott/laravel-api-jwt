<?php

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
                'name' => 'Apple iPhone X 64GB Space Gray',
                'price' => 36499,
                'created_at' => '2018-09-11 13:25:24',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Samsung Galaxy Note 9 128GB Midnight Black',
                'price' => 34999,
                'created_at' => '2018-09-12 13:25:24',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Asus ZenBook Pro 15 UX580GE-BN057R',
                'price' => 81699,
                'created_at' => '2018-09-13 13:25:24',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Xiaomi Mi Notebook Air 13.3',
                'price' => 27944,
                'created_at' => '2018-09-14 13:25:24',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Apple MacBook Pro 15.4',
                'price' => 179008,
                'created_at' => '2018-09-15 13:25:24',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'MSI GT75-8RF Titan',
                'price' => 168799,
                'created_at' => '2018-09-16 13:25:24',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dell Alienware 17 R5',
                'price' => 124099,
                'created_at' => '2018-09-17 13:25:24',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
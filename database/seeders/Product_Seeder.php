<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'nom'=>'tv 56 inch',
                'price'=>'1000',
                'category'=>'tv',
                'gallery'=>'https://media.istockphoto.com/photos/with-two-clipping-paths-picture-id173240143?k=20&m=173240143&s=612x612&w=0&h=yukXLfScWLEgiYn3xwW_Tfxl3VVGGjB_C6a4Rpsg22M=',
                'description'=>'Une smart tv avec une nouvelle option'
            ],
            [
                'nom'=>'tv 56 inch',
                'price'=>'1000',
                'category'=>'tv',
                'gallery'=>'https://media.istockphoto.com/photos/with-two-clipping-paths-picture-id173240143?k=20&m=173240143&s=612x612&w=0&h=yukXLfScWLEgiYn3xwW_Tfxl3VVGGjB_C6a4Rpsg22M=',
                'description'=>'Une smart tv avec une nouvelle option'
            ],
            
        ]);
    }
}

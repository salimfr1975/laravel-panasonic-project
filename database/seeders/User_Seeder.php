<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'nom'=>'Jules',
                'email'=>'jules@yahoo.com',
                'password'=>Hash::make('12345')
            ],
            [
                'nom'=>'Felten',
                'email'=>'felten@yahoo.com',
                'password'=>Hash::make('12345')
            ],
            [
                'nom'=>'Roppel',
                'email'=>'roppel@yahoo.com',
                'password'=>Hash::make('12345')
            ],
            [
                'nom'=>'Zakaria',
                'email'=>'zakaria@yahoo.com',
                'password'=>Hash::make('12345')
            ],
            [
                'nom'=>'Thicot',
                'email'=>'thicot@yahoo.com',
                'password'=>Hash::make('12345')
            ],
            [
                'nom'=>'Brandon',
                'email'=>'brandon@yahoo.com',
                'password'=>Hash::make('12345')
            ]
        ]);
    }
}

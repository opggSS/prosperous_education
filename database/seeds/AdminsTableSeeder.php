<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('admins')->insert([
            [
            'username' => 'jason',
            'password' =>bcrypt('jklsh2009')
            ],

            [
            'username' => 'admin',
            'password' =>bcrypt('prosperousadmin'),
            ]
            
        ]);
    }
}


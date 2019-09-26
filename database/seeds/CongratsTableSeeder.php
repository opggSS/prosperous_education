<?php

use Illuminate\Database\Seeder;

class CongratsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('congrats')->insert([
            [
            'content' => '恭喜 Gao Yawen 同学被西安大略 (UWO) 工程和科学系录取',
            ],

            [
            'content' => '恭喜 Liang Zai 同学被 UBC 商科系录取',
            ]
        ]);
    }
}


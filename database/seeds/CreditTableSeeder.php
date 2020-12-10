<?php

use Illuminate\Database\Seeder;

class CreditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('credits')->insert([
            [
                'category' => '専門科目',
            ],
            [
                'category' => '専門基礎科目',
            ],
            [
                'category' => '教養科目',
            ],
            [
                'category' => '必須科目',
            ]
        ]);
    }
    
}
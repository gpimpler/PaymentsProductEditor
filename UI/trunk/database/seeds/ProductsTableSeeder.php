<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete table records
        DB::table('products')->delete();
        //insert some dummy records
            DB::table('products')->insert([
            [
                'id' => 1,
                'type' => 'check',
                'active' => 1
            ],
            [
                'id' => 2,
                'type' => 'check',
                'active' => 0
            ],
            [
                'id' => 3,
                'type' => 'pen',
                'active' => 1
            ]
        ]);
    }
}

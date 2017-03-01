<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete table records
        DB::table('users')->delete();
        //insert some dummy records
            DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Mike Stoiber',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'id' => 2,
                'name' => 'Lea Munroe',
                'email' => 'editor@example.com',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}

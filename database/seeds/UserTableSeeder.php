<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Paul Bryan Dy',
            'email' => 'dy.paulbryan@gmail.com',
            'description' => 'Administrator',
            'password' => Hash::make('12345678'),
        ]);
    }
}

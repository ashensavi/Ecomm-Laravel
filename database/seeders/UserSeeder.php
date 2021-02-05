<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('users')->insert([
            'name'=>'Nishara Senanayake',
            'email'=>'nisharasenanayake22@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}

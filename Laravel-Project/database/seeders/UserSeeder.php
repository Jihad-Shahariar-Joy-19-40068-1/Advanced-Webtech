<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('users')->insert([
            'name'=>'Jihad Shahariar Joy',
            'email'=>'jihadshahariarjoy2211@gmail.com',
            'password'=>Hash::make('123'),
            'dob'=>'2000-11-27'
        ]);
    }
}

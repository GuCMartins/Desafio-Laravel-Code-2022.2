<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = \App\Models\User::create([
            'name'=>'a',
            'email'=>'a@a',
            'password'=>Hash::make(123456),
            'association'=>'aa',
       ]);
       $user->permission = true;
       $user->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              =>  'Diego',
            'email'             =>  'tecmilenio@gmail.com',
            'password'          =>  Hash::make('password'),
            'email_verified_at' =>  now()
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData=[
            [
            'name'=> 'Mas Donatur',
            'email'=>'Donatur@gmail.com',
            'role'=>'donatur',
            'password'=>bcrypt('123456')
            ],
        [
            'name'=> 'Mas pengasuh',
            'email'=>'pengasuh@gmail.com',
            'role'=>'pengasuh',
            'password'=>bcrypt('123456')
        ],
      [
            'name'=> 'Mas anak asuh',
            'email'=>'anakasuh@gmail.com',
            'role'=>'anak_asuh',
            'password'=>bcrypt('123456')
        ],
        [
            'name'=> 'Mas relawan',
            'email'=>'relawan@gmail.com',
            'role'=>'relawan',
            'password'=>bcrypt('123456')
        ],
        [
            'name'=> 'Mas pengelola',
            'email'=>'pengelola@gmail.com',
            'role'=>'pengelola',
            'password'=>bcrypt('123456')
        ]

    
    ];
    foreach($userData as $key=>$val){
        User::create($val);
    }
    }
}

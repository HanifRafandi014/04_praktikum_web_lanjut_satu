<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $data = [[
            'name' => 'Hanif Naufal Rafandi',
            'email' => ' rafandinaufal03@gmail.com',
            'password' => 'workall79127'
        ],
        [
            'name' => 'Rafifa Nayla Asmadiena',
            'email' => ' princessweet31@gmail.com',
            'password' => 'rafifacans4172'
        ]
    ];
    DB::table('users')->insert($data);
}
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $data = [[
            'title' => 'Belajar Install Laravel',
            'slug' => ' belajar-install-laravel',
            'content' => 'Belajar Laravel itu menyenangkan',
            'draft' => 0
        ],
        [
            'title' => 'Belajar Controller Dengan Laravel',
            'slug' => ' belajar-controller-dengan-laravel',
            'content' => 'Belajar Laravel itu menyenangkan',
            'draft' => 0
        ],
        [
            'title' => 'Belajar Model Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'content' => 'Belajar Laravel itu menyenangkan',
            'draft' => 0
        ]
    ];
    DB::table('posts')->insert($data);
}
}

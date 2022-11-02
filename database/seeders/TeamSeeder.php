<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => Str::random(10),
            'position' => Str::random(10),
            'image' => Str::random(10),
            'description' => Str::random(200),
            'email' => Str::random(10).'@gmail.com',
            'phone' => Str::random(10),
            'biography' => Str::random(250),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Ground;
use App\Models\Grounds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Ground:: create(['groundname'=>'Ms Ground','email'=>'admin@gmail.com','password'=>bcrypt(123456)]);
    }
}

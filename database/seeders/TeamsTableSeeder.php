<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::insert([
            ['name' => 'Team A', 'min_age' => 22, 'max_age' => 60,'subscription_fee'=>5000], // 22 and above
            ['name' => 'Under-21', 'min_age' => 18, 'max_age' => 21,'subscription_fee'=>4000],
            ['name' => 'Under-17', 'min_age' => 14, 'max_age' => 17,'subscription_fee'=>3000],
            ['name' => 'Under-13', 'min_age' => 5, 'max_age' => 13,'subscription_fee'=>2500], // Below 13
        ]);
    }
    
}

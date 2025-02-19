<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\DB;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 50; $i++) {
            Result::create([
                "user_id" => rand(1,1),
                "score" => rand(1, 30),
                "subject_id" => rand(1, 6)
            ]);
        }
    }
}

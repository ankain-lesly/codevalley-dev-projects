<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("subjects")->insert([
            ["subject" => "Mathematics"],
            ["subject" => "Physics"],
            ["subject" => "General Knowledge"],
            ["subject" => "Biology"],
            ["subject" => "Chemistry"],
            ["subject" => "French"],
        ]);
    }
}

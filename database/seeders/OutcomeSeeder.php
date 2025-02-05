<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\OutcomeFactory;
use Illuminate\Support\Facades\DB;
use App\Models\Outcome;

class OutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outcome::factory()->count(30)->create();
    }
}

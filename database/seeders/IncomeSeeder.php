<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\IncomeFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Income;


class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Income::factory()->count(30)->create();
    }
}

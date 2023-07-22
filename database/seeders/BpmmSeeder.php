<?php

namespace Database\Seeders;

use App\Models\Bpmm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BpmmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bpmm::factory()->count(30)->create();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompleteProgram;

class CompleteProgramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompleteProgram::factory()->count(10)->create();
    }
}

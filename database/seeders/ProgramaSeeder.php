<?php

namespace Database\Seeders;

use App\Models\Programa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Programa::factory()->create([
            'codigoPrograma' => 2827703,
            'nombrePrograma' => 'ADSO',
        ]);
    }
}

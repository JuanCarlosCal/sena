<?php

namespace Database\Seeders;

use App\Models\Aprendiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AprendizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aprendiz::factory()->create([
            'numeroDocumento' => 1105856540,
            'primerNombre' => 'Juan',
        ]);
    }
}

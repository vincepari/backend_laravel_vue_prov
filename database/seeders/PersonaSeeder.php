<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $per1 = new Persona();
        $per1->nombre_completo ="VINCS";
        $per1->apellidos = "PARI";
        $per1->fecha_nacimiento = "1991-12-12";
        $per1->user_id = 1;
        $per1->save();
    }
}

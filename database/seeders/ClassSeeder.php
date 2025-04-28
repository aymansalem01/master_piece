<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        Classe::create([
            'name' => 'First Grade',
            'price' => 20,
        ]);
        Classe::create([
            'name' => 'Second Grade',
            'price' => 20,
        ]);
        Classe::create([
            'name' => 'Third Grade',
            'price' => 20,
        ]);
        Classe::create([
            'name' => 'Fourth Grade',
            'price' => 20,
        ]);
        Classe::create([
            'name' => 'Fifth Grade',
            'price' => 20,
        ]);
        Classe::create([
            'name' => 'Sixth Grade',
            'price' => 20,
        ]);
        Classe::create([
            'name' => 'Seventh Grade',
            'price' => 20,
        ]);
        Classe::create([
            'name' => 'Eighth Grade',
            'price' => 20,
        ]);
    }
}

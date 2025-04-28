<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            'name' => 'math',
            'classe_id' => 1,
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 1,
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 2,
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 2,
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 3,
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 3,
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 4,
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 4,
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 5,
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 5,
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 6,
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 6,
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 7,
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 7,
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 8,
        ]);
        Subject::create([
            'name' => 'physics',
            'classe_id' => 8,
        ]);
        Subject::create([
            'name' => 'chemistry',
            'classe_id' => 8,
        ]);
        Subject::create([
            'name' => 'biology',
            'classe_id' => 8,
        ]);
        Subject::create([
            'name' => 'geology',
            'classe_id' => 8,
        ]);
    }
}

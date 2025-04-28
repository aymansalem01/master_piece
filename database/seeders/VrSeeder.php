<?php

namespace Database\Seeders;

use App\Models\Vr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VrSeeder extends Seeder
{
    public function run(): void
    {
    Vr::create([
        'title' => 'chemistry lab 8th Grade',
        'link' => 'test',
        'image' => 'test',
        'subject_id' => 17
    ]);
    Vr::create([
        'title' => 'biology lab 8th Grade',
        'link' => 'test',
        'image' => 'test',
        'subject_id' => 18
    ]);
    Vr::create([
        'title' => 'physics lab 8th Grade',
        'link' => 'test',
        'image' => 'test',
        'subject_id' => 16
    ]);
    Vr::create([
        'title' => 'geology lab 8th Grade',
        'link' => 'test',
        'image' => 'test',
        'subject_id' => 19
    ]);
    }
}

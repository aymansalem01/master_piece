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
        'image' => 'chlav.jpg',
        'subject_id' => 16
    ]);
    // Vr::create([
    //     'title' => 'physics lab 8th Grade',
    //     'link' => 'test',
    //     'image' => 'phylab.png',
    //     'subject_id' => 16
    // ]);
    Vr::create([
        'title' => 'chemistry lab 9th Grade',
        'link' => 'test',
        'image' => 'chlav.jpg',
        'subject_id' => 18
    ]);
    Vr::create([
        'title' => 'physics lab 9th Grade',
        'link' => 'test',
        'image' => 'phylab.png',
        'subject_id' => 21
    ]);
    Vr::create([
        'title' => 'chemistry lab 10th Grade',
        'link' => 'test',
        'image' => 'chlav.jpg',
        'subject_id' => 23
    ]);
    Vr::create([
        'title' => 'physics lab 10th Grade',
        'link' => 'test',
        'image' => 'phylab.png',
        'subject_id' => 26
    ]);
    Vr::create([
        'title' => 'biology lab 10th Grade',
        'link' => 'test',
        'image' => 'boilab',
        'subject_id' => 25
    ]);

    }
}

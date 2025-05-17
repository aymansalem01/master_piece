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
            'image' => '682882861e884-math.png'
        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 1,
            'image' => '682882c6bc8a3-science.png'
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 2,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 2,
            'image' => '682882c6bc8a3-science.png'

        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 3,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 3,
            'image' => '682882c6bc8a3-science.png'

        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 4,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 4,
            'image' => '682882c6bc8a3-science.png'

        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 5,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 5,
            'image' => '682882c6bc8a3-science.png'

        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 6,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 6,
            'image' => '682882c6bc8a3-science.png'

        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 7,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 7,
            'image' => '682882c6bc8a3-science.png'

        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 8,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'science',
            'classe_id' => 8,
            'image' => '682882c6bc8a3-science.png'

        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 9,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'chemistry',
            'classe_id' => 9,
            'image' => '6828832f4640f-chemistry.png'
        ]);
        Subject::create([
            'name' => 'geology',
            'classe_id' => 9,
            'image' => '6828839907bc2-geology.png'
        ]);
        Subject::create([
            'name' => 'biology',
            'classe_id' => 9,
            'image' => '682884a25f58e-biology.png'
        ]);
        Subject::create([
            'name' => 'Physics',
            'classe_id' => 9,
            'image' => '682884d03a2fa-Physics.png'
        ]);
        Subject::create([
            'name' => 'math',
            'classe_id' => 10,
            'image' => '682882861e884-math.png'

        ]);
        Subject::create([
            'name' => 'chemistry',
            'classe_id' => 10,
            'image' => '6828832f4640f-chemistry.png'
        ]);
        Subject::create([
            'name' => 'geology',
            'classe_id' => 10,
            'image' => '6828839907bc2-geology.png'
        ]);
        Subject::create([
            'name' => 'biology',
            'classe_id' => 10,
            'image' => '682884a25f58e-biology.png'

        ]);
        Subject::create([
            'name' => 'Physics',
            'classe_id' => 10,
            'image' => '682884d03a2fa-Physics.png'
        ]);

    }
}

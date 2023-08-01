<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lesson;

class CreateLessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = [
            [
                'title'=>'MATH',
                'description'=>'Master in Math',
            ],
            [
                'title'=>'Science',
                'description'=>'Master in Science',
            ],
            [
                'title'=>'Filipion',
                'description'=>'Master in Filipino',
            ],
            [
                'title'=>'English',
                'description'=>'Master in English',
            ],
            [
                'title'=>'Araling Panlipunan',
                'description'=>'Master in Araling Panlipunan',
            ],
        ];

        foreach ($lessons as $key => $value) {
            Lesson::create($value);
        }
    }
}

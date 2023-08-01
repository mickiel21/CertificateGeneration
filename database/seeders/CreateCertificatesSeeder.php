<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CreateCertificatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $certificates = [
            [
                'user_id'=> 1,
                'lesson_id'=> 1,
            ],
            [
                'user_id'=> 1,
                'lesson_id'=> 2,
            ],
            [
                'user_id'=> 1,
                'lesson_id'=> 3
            ],
            [
                'user_id'=> 1,
                'lesson_id'=> 4,
            ],
            [
                'user_id'=> 1,
                'lesson_id'=> 5,
            ],
        ];

        foreach ($certificates as $key => $value) {
            Certificate::create($value);
        }
    }
}

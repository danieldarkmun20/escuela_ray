<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::create([
            "nivel" => 1,
            "title" => "LESSON ONE",
            "path" => "lesson_1_video.mp4",
            "preview_path" => "lesson_1_img.png",
        ]);
        Lesson::create([
            "nivel" => 2,
            "title" => "LESSON 2",
            "path" => "lesson_1_video.mp4",
            "preview_path" => "lesson_2_img.png",
        ]);
    }
}

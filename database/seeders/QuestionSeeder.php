<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            "text" => "Pregunta 1",
            "lesson_id" => 1,
            "correct_answer" => "1"
        ]);
        Question::create([
            "text" => "Pregunta 2",
            "lesson_id" => 1,
            "correct_answer" => "5"
        ]);
        Question::create([
            "text" => "Pregunta 3",
            "lesson_id" => 1,
            "correct_answer" => "9"
        ]);
        Question::create([
            "text" => "Pregunta 4",
            "lesson_id" => 1,
            "correct_answer" => "13"
        ]);
        Question::create([
            "text" => "Pregunta 5",
            "lesson_id" => 1,
            "correct_answer" => "17"
        ]);
        Question::create([
            "text" => "Pregunta 6",
            "lesson_id" => 1,
            "correct_answer" => "21"
        ]);
        Question::create([
            "text" => "Pregunta 7",
            "lesson_id" => 1,
            "correct_answer" => "25"
        ]);
        Question::create([
            "text" => "Pregunta 8",
            "lesson_id" => 1,
            "correct_answer" => "29"
        ]);
        Question::create([
            "text" => "Pregunta 9",
            "lesson_id" => 1,
            "correct_answer" => "33"
        ]);
        Question::create([
            "text" => "Pregunta 10",
            "lesson_id" => 1,
            "correct_answer" => "37"
        ]);
    }
}

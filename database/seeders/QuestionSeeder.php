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
            "text" => "1. ¿Quién debe hacerse cargo de la conservación y protección del medio ambiente?",
            "lesson_id" => 1,
            "correct_answer" => "3"
        ]);
        Question::create([
            "text" => "2. ¿Qué es el medio ambiente?",
            "lesson_id" => 1,
            "correct_answer" => "8"
        ]);
        Question::create([
            "text" => "3. ¿Porque es importante cuidar el medio ambiente?",
            "lesson_id" => 1,
            "correct_answer" => "9"
        ]);
        Question::create([
            "text" => "4. ¿Qué tareas puedes hacer para proteger el medio ambiente?",
            "lesson_id" => 1,
            "correct_answer" => "16"
        ]);
        Question::create([
            "text" => "5. ¿Como se contamina el medio ambiente? ",
            "lesson_id" => 1,
            "correct_answer" => "17"
        ]);
        Question::create([
            "text" => "6. ¿Que es la contaminación? ",
            "lesson_id" => 1,
            "correct_answer" => "21"
        ]);
        Question::create([
            "text" => "7. De estas acciones, ¿cuál NO protege al medio ambiente?",
            "lesson_id" => 1,
            "correct_answer" => "28"
        ]);
        Question::create([
            "text" => "8. ¿Que son los hábitos proambientales?",
            "lesson_id" => 1,
            "correct_answer" => "30"
        ]);
        Question::create([
            "text" => "9. ¿Cuál de estos hábitos ayuda a conservar medio ambiente?",
            "lesson_id" => 1,
            "correct_answer" => "34"
        ]);
        Question::create([
            "text" => "10. ¿A dónde va a parar el humo que sale de los vehículos, chimeneas e industrias?",
            "lesson_id" => 1,
            "correct_answer" => "38"
        ]);
    }
}

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
        //lesson 2
        Question::create([
            "text" => "1. ¿Qué es el calentamiento global?",
            "lesson_id" => 2,
            "correct_answer" => "42"
        ]);
        Question::create([
            "text" => "2. ¿Qué provoca el calentamiento global?",
            "lesson_id" => 2,
            "correct_answer" => "47"
        ]);
        Question::create([
            "text" => "3. Una de estas acciones ayuda a reducir el calentamiento global, ¿cuál?",
            "lesson_id" => 2,
            "correct_answer" => "51"
        ]);
        Question::create([
            "text" => "4. ¿Qué conocida e importante ONG, con 4,7 millones de miembros, cuida el medio ambiente?",
            "lesson_id" => 2,
            "correct_answer" => "52"
        ]);
        Question::create([
            "text" => "5. ¿Qué de coches tiene previsto Europa prohibir vender a partir de 2035?",
            "lesson_id" => 2,
            "correct_answer" => "55"
        ]);
        Question::create([
            "text" => "6. ¿Qué es el greenwashing?",
            "lesson_id" => 2,
            "correct_answer" => "57"
        ]);
        Question::create([
            "text" => "7. En 2016, 200 Estados firmaron un acuerdo para reducir las emisiones de CO2, ¿cómo se llama ese acuerdo?",
            "lesson_id" => 2,
            "correct_answer" => "61"
        ]);
        Question::create([
            "text" => "8. ¿Cuál de estos es un combustible fósil?",
            "lesson_id" => 2,
            "correct_answer" => "65"
        ]);
        Question::create([
            "text" => "9. ¿Qué niña fue invitada por la ONU para hablar sobre el calentamiento global?",
            "lesson_id" => 2,
            "correct_answer" => "67"
        ]);
        Question::create([
            "text" => "10. ¿En qué contenedor tirarías un brik de leche ya usado para reciclarlo?",
            "lesson_id" => 2,
            "correct_answer" => "72"
        ]);
    }
}

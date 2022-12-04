<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Option::create([
            "text" => "Mamá y papá",
            "question_id" => 1
        ]);
        Option::create([
            "text" => "Mi perro",
            "question_id" => 1
        ]);
        Option::create([
            "text" => "Todos los seres humanos",
            "question_id" => 1
        ]);
        Option::create([
            "text" => "Todos los seres humanos, excepto yo",
            "question_id" => 1
        ]);
        Option::create([
            "text" => "El cielo y el suelo",
            "question_id" => 2
        ]);
        Option::create([
            "text" => "El agua y las plantas",
            "question_id" => 2
        ]);
        Option::create([
            "text" => "Los animales y seres humanos",
            "question_id" => 2
        ]);
        Option::create([
            "text" => "Todas las anteriores",
            "question_id" => 2
        ]);
        Option::create([
            "text" => "Porque es donde vivimos",
            "question_id" => 3
        ]);
        Option::create([
            "text" => "Los animales viven en el",
            "question_id" => 3
        ]);
        Option::create([
            "text" => "Es nuestra responsabilidad",
            "question_id" => 3
        ]);
        Option::create([
            "text" => "Porque me gusta",
            "question_id" => 3
        ]);
        Option::create([
            "text" => "Tirar la basura en el bote de basura",
            "question_id" => 4
        ]);
        Option::create([
            "text" => "Apagar la luz cuando no se esté usando",
            "question_id" => 4
        ]);
        Option::create([
            "text" => "Cerrar la llave del grifo",
            "question_id" => 4
        ]);
        Option::create([
            "text" => "Todas las anteriores",
            "question_id" => 4
        ]);
        Option::create([
            "text" => "Tirando basura al agua y al bosque",
            "question_id" => 5
        ]);
        Option::create([
            "text" => "Pisando el pasto",
            "question_id" => 5
        ]);
        Option::create([
            "text" => "Pelear con animales",
            "question_id" => 5
        ]);
        Option::create([
            "text" => "Jugando videojuegos",
            "question_id" => 5
        ]);
        Option::create([
            "text" => "Dañar o alterar el medio ambiente",
            "question_id" => 6
        ]);
        Option::create([
            "text" => "Tirar basura",
            "question_id" => 6
        ]);
        Option::create([
            "text" => "Lastimar plantas y animales",
            "question_id" => 6
        ]);
        Option::create([
            "text" => "Talar árboles",
            "question_id" => 6
        ]);
        Option::create([
            "text" => "Apagar la luz cuando no la estoy usando",
            "question_id" => 7
        ]);
        Option::create([
            "text" => "Cerrar la llave del agua cuando me lavo los dientes",
            "question_id" => 7
        ]);
        Option::create([
            "text" => "Cuidar las plantas y los animales",
            "question_id" => 7
        ]);
        Option::create([
            "text" => "Tirar basura en la calle",
            "question_id" => 7
        ]);
        Option::create([
            "text" => "Habilidades para vivir en el bosque",
            "question_id" => 8
        ]);
        Option::create([
            "text" => "Tareas que ayudan a cuidar el medio ambiente",
            "question_id" => 8
        ]);
        Option::create([
            "text" => "Tareas para contaminar el medio ambiente ",
            "question_id" => 8
        ]);
        Option::create([
            "text" => "Sembrar plantas",
            "question_id" => 8
        ]);
        Option::create([
            "text" => "Bailar",
            "question_id" => 9
        ]);
        Option::create([
            "text" => "Apagar la tele cuando no la estoy viendo",
            "question_id" => 9
        ]);
        Option::create([
            "text" => "Hacerme un sándwich de pollo",
            "question_id" => 9
        ]);
        Option::create([
            "text" => "Preocuparme por todo y no hacer nada",
            "question_id" => 9
        ]);
        Option::create([
            "text" => "En las montañas",
            "question_id" => 10
        ]);
        Option::create([
            "text" => "En el aire que respiramos",
            "question_id" => 10
        ]);
        Option::create([
            "text" => "En el parque de mi colonia",
            "question_id" => 10
        ]);
        Option::create([
            "text" => "En el supermercado",
            "question_id" => 10
        ]);
    }
}

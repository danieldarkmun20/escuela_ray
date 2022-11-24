<?php

namespace App\Http\Controllers;

use App\Http\Resources\LessonResource;
use App\Models\Answer;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        return LessonResource::collection($lessons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $lesson = Lesson::where("id", $id)->with(["questions" => function ($q) {
            $q->with("options");
        }])->first();
        return new LessonResource($lesson);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }

    public function reply(Request $request, $id)
    {
        // return $id;
        $lesson = Lesson::where("id", $id)->with("questions")->first();
        $options = $request->data;
        $user = 0;
        foreach ($options as $key => $option) {
            // return $option;
            // return $options[$key]["option_id"];
            if ($lesson->questions[$key]->correct_answer != $options[$key]["option_id"]) {
                // return $lesson->questions[$key];
                //     Answer::create([
                //         "option_id" => $option["option_id"],
                //         "user_id" => $option["user_id"],
                //     ]);
                return $this->customValidationErrorResponse(['mal_contestado' => [__('Tienes una o mas respuestas erroneas')]], __('Leccion mal contestado'));;
            }
        }
        foreach ($options as $key => $option) {
            // return $option;
            Answer::create([
                "option_id" => $option["option_id"],
                "user_id" => $option["user_id"],
            ]);
            $user = $option["user_id"];
        }
        // $auth_user = Auth()->user();
        $user = User::where("id", $user)->first();
        $user->nivel = $lesson->nivel;
        $user->save();
        return $this->successResponse(null, __('Se ha realizado con exito el registro'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\Administrator;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with("user")->get();
        return UserResource::collection($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'last_name1' => $request->last_name1,
            'last_name2' => $request->last_name2,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $student = Student::create([
            'user_id' => $user->id,
            'teacher_id' => $request->teacher_id,
        ]);

        return $student ? $this->successResponse($student, __('Se ha realizado con exito el registro')) : $this->customValidationErrorResponse(['general' => [__('Algo salió mal al generar el usuario.')]], __('Algo salió mal'));
    }

    public function addStudentByTeacher(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        $student = Student::where("user_id", $user->id)->first();
        $student->teacher_id = $request->teacher_id;
        $student->save();

        return $this->successResponse($student, __('Se ha realizado con exito el registro'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::where("id", $id)->with("user")->first();
        return new UserResource($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::where("id", $id)->first();
        $user = User::where("id", $student->user_id)->first();
        $user->name = isset($request->name) ? $request->name : $user->name;
        $user->last_name1 = isset($request->last_name1) ? $request->last_name1 : $user->last_name1;
        $user->last_name2 = isset($request->last_name2) ? $request->last_name2 : $user->last_name2;
        $user->email = isset($request->email) ? $request->email : $user->email;
        $user->save();
        return $this->successResponse(null, __('Se ha realizado con exito el registro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::where("id", $id)->first();
        $id = $student->user_id;
        $student->delete();
        User::where("id", $id)->delete();
        return $this->successResponse(null, __('Se ha realizado ha eliminado con exito'));
    }

    public function studentsByTeacher($id)
    {
        $students = Student::with("user")->where("teacher_id", $id)->get();
        return UserResource::collection($students);
    }
    public function deleteStudentsByTeacher($id)
    {
        $student = Student::where("id", $id)->with("user")->first();
        $student->teacher_id = Null;
        $student->save();

        return $this->successResponse($student, __('Se ha realizado ha eliminado con exito'));
    }
}

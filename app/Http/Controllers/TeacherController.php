<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\Administrator;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::with("user")->get();
        return UserResource::collection($teachers);
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

        $teacher = Teacher::create([
            'user_id' => $user->id
        ]);

        $teacher = Teacher::where("id", $teacher->id)->with("user")->first();

        return $teacher ? $this->successResponse($teacher, __('Se ha realizado con exito el registro')) : $this->customValidationErrorResponse(['general' => [__('Algo salió mal al generar el usuario.')]], __('Algo salió mal'));
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
        $teacher = Teacher::where("id", $id)->with("user")->first();
        return new UserResource($teacher);
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
        $teacher = Teacher::where("id", $id)->first();
        $user = User::where("id", $teacher->user_id)->first();
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
        $teacher = Teacher::where("id", $id)->first();
        $id = $teacher->user_id;
        $teacher->delete();
        User::where("id",$id)->delete();
        return $this->successResponse(null, __('Se ha realizado ha eliminado con exito'));
    }
}

<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource("administrators", AdministratorController::class);
Route::resource("teachers", TeacherController::class);
Route::resource("students", StudentController::class);
Route::resource("lessons", LessonController::class);
Route::get("students-teacher/{id}", [StudentController::class, "studentsByTeacher"]);
Route::post("reply/{id}", [LessonController::class, "reply"]);
Route::delete("students-teacher/{id}", [StudentController::class, "deleteStudentsByTeacher"]);
Route::post("students/teacher", [StudentController::class, "addStudentByTeacher"]);
Route::group(['middleware' => ['auth:sanctum']], function () {
});

Route::post('login', [AuthController::class, 'login']);


Route::post('logout', [AuthController::class, 'logout']);

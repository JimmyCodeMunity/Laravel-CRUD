<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [StudentController::class,'index'])->name('students.index');

//go to view students
Route::get('/students', [StudentController::class,'viewstudents'])->name('students.viewstudents');


//goes t the registering ew student form
Route::get('/register', [StudentController::class,'registerstudent'])->name('students.register');

//add student to the database
Route::post('/register', [StudentController::class,'addstudent'])->name('students.newstudent');

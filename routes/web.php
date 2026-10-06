<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first_page', function () {
    return view('first');
});

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students',[StudentController::class, 'index'])->name('students.index');

Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

// Route::get('/first_page', function(){
//     $a = 3;
//     $b = 5;
//     $c = $a + $b;
//     return view('first', compact('a', 'b', 'c'));
// });

// Route::get('/first_page', [MainController::class, 'show'])->name('first');
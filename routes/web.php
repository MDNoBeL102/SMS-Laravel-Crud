<?php
use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Route;


Route::get('/',[StudentController::class,'index'])->name('home');
Route::get('/add-department',[StudentController::class,'showDepartment'])->name('add.department');
Route::get('/add-section',[StudentController::class,'showSection'])->name('add.section');

Route::post('/new-student',[StudentController::class,'saveStudent'])->name('new.student');
Route::post('/new-department',[StudentController::class,'saveDepartment'])->name('new.department');
Route::post('/new-section',[StudentController::class,'saveSection'])->name('new.section');

Route::get('/manage-student',[StudentController::class,'manageStudent'])->name('manage.student');
Route::get('/manage-department',[StudentController::class,'manageDepartment'])->name('manage.department');
Route::get('/manage-section',[StudentController::class,'manageSection'])->name('manage.section');

Route::get('/edit-student/{id}',[StudentController::class,'editStudent'])->name('edit.student');
Route::get('/edit-department/{id}',[StudentController::class,'editDepartment'])->name('edit.department');
Route::get('/edit-section/{id}',[StudentController::class,'editSection'])->name('edit.section');

Route::post('/update-student',[StudentController::class,'updateStudent'])->name('update.student');
Route::post('/update-department',[StudentController::class,'updateDepartment'])->name('update.department');
Route::post('/update-section',[StudentController::class,'updateSection'])->name('update.section');

Route::post('/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('delete.Student');
Route::post('/delete-department/{id}',[StudentController::class,'deleteDepartment'])->name('delete.department');
Route::post('/delete-section/{id}',[StudentController::class,'deleteSection'])->name('delete.section');


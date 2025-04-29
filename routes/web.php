<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;



Route::get('/formulario',[training_centerController::class,'create']);
Route::post('/respuesta',[training_centerController::class,'store'])->name('trainings.store');
//Route::delete('/destroy/{training}',[training_centerController::class,'destroy'])->name('trainings.destroy');
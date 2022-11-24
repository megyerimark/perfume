<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;





Route::get("/" , [PerfumeController::class , "getPerfumes"]);
Route::get("/add" , [PerfumeController::class , "add"]);
Route::post("/save" , [PerfumeController::class , "save"]);
Route::get("/edit/{id}" , [PerfumeController::class , "edit"]);
Route::get("/update" , [PerfumeController::class , "update"]);
Route::get("/delete/{id}",[PerfumeController::class, 'delete']);
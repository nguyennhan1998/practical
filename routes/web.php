<?php

use Illuminate\Support\Facades\Route;
Route::get("/home","WebController@Home");
Route::get("/list-book","WebController@listBook");
Route::get("/find-book","WebController@findBook");
Route::get("/survey","WebController@surveyForm");
Route::post("/save-feedback","WebController@saveFeedback");



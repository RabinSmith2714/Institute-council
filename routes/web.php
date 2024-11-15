<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', [userController::class,"admin"]);

Route::post('/add/addJournal', [userController::class, 'addJournal']);
Route::delete('/user/deleteJournal/{id}', [userController::class, 'deleteJournal']);
Route::get('/user/editJournal/{id}', [UserController::class, 'editJournal']);
Route::post('/user/updateJournal/{id}', [UserController::class, 'updateJournal']);

Route::post('/add/addConsultancy', [userController::class, 'addConsultancy']);
Route::delete('/user/deleteConsultancy/{id}', [userController::class, 'deleteConsultancy']);

Route::post('/add/addFundedproject', [userController::class, 'addFundedproject']);
Route::delete('/user/deleteFundedproject/{id}', [userController::class, 'deleteFundedproject']);

Route::post('/add/addAwarenessprogram', [userController::class, 'addAwarenessprogram']);
Route::delete('/user/deleteawarenessProgram/{id}', [userController::class, 'deleteawarenessProgram']);

Route::post('/add/addConference', [userController::class, 'addConference']);
Route::delete('/user/deleteConference/{id}', [userController::class, 'deleteConference']);

Route::post('/add/addPatent', [userController::class, 'addPatent']);
Route::delete('/user/deletePatent/{id}', [userController::class, 'deletePatent']);

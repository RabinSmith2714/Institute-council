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
Route::get('/user/editConsultancy/{id}', [UserController::class, 'editConsultancy']);
Route::post('/user/updateConsultancy/{id}', [UserController::class, 'updateConsultancy']);

Route::post('/add/addFundedproject', [userController::class, 'addFundedproject']);
Route::delete('/user/deleteFundedproject/{id}', [userController::class, 'deleteFundedproject']);
Route::get('/user/editFundedproject/{id}', [UserController::class, 'editFundedproject']);
Route::post('/user/updateFundedproject/{id}', [UserController::class, 'updateFundedproject']);

Route::post('/add/addAwarenessprogram', [userController::class, 'addAwarenessprogram']);
Route::delete('/user/deleteawarenessProgram/{id}', [userController::class, 'deleteawarenessProgram']);
Route::get('/user/editAwarenessprogram/{id}', [UserController::class, 'editAwarenessprogram']);
Route::post('/user/updateAwarenessprogram/{id}', [UserController::class, 'updateAwarenessprogram']);

Route::post('/add/addConference', [userController::class, 'addConference']);
Route::delete('/user/deleteConference/{id}', [userController::class, 'deleteConference']);
Route::get('/user/editConference/{id}', [UserController::class, 'editConference']);
Route::post('/user/updateConference/{id}', [UserController::class, 'updateConference']);

Route::post('/add/addPatent', [userController::class, 'addPatent']);
Route::delete('/user/deletePatent/{id}', [userController::class, 'deletePatent']);
Route::get('/user/editPatent/{id}', [UserController::class, 'editPatent']);
Route::post('/user/updatePatent/{id}', [UserController::class, 'updatePatent']);

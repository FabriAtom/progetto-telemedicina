<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('{any?}', function () {
//     return view('guest.home');
// })->where('any', '.*');


Route::get('/serd/getSerdCards', [App\Http\Controllers\SerdCardsController::class,'index'])->name('getSerdCards');
Route::get('/serd/getSerdCardById/{id}', [App\Http\Controllers\SerdCardsController::class,'getSerdCardById'])->name('getSerdCardById');
Route::get('/serd/getSerdCardsByUserIstanceId/{id}', [App\Http\Controllers\SerdCardsController::class,'getSerdCardsByUserIstanceId'])->name('getSerdCardsByUserIstanceId');
Route::get('/serd/getToxicologyReportsBySerdId/{id}', [App\Http\Controllers\SerdCardsController::class,'getToxicologyReportsBySerdId'])->name('getToxicologyReportsBySerdId');
Route::get('/serd/getPsychologicalAnamnesesBySerdId/{id}', [App\Http\Controllers\SerdCardsController::class,'getPsychologicalAnamnesesBySerdId'])->name('getPsychologicalAnamnesesBySerdId');
Route::get('/serd/getSocialFoldersBySerdId/{id}', [App\Http\Controllers\SerdCardsController::class,'getSocialFoldersBySerdId'])->name('getSocialFoldersBySerdId');
Route::get('/serd/getCurrentToxicologyReportBySerdId/{id}', [App\Http\Controllers\SerdCardsController::class,'getCurrentToxicologyReportBySerdId'])->name('getCurrentToxicologyReportBySerdId');
Route::get('/serd/getCurrentPsychologicalAnamnesisBySerdId/{id}', [App\Http\Controllers\SerdCardsController::class,'getCurrentPsychologicalAnamnesisBySerdId'])->name('getCurrentPsychologicalAnamnesisBySerdId');
Route::get('/serd/getCurrentSocialFolderBySerdId/{id}', [App\Http\Controllers\SerdCardsController::class,'getCurrentSocialFolderBySerdId'])->name('getCurrentSocialFolderBySerdId');

Route::get('/serd/printArchive/{id}/{panel}', [App\Http\Controllers\SerdCardsController::class,'printArchive'])->name('printArchive');
Route::post('/serd/store', [App\Http\Controllers\SerdCardsController::class,'store'])->name('store');
Route::post('/serd/addToxicologyReport', [App\Http\Controllers\SerdCardsController::class,'addToxicologyReport'])->name('addToxicologyReport');
Route::post('/serd/addPsychologicalAnamnesis', [App\Http\Controllers\SerdCardsController::class,'addPsychologicalAnamnesis'])->name('addPsychologicalAnamnesis');
Route::post('/serd/addSocialFolder', [App\Http\Controllers\SerdCardsController::class,'addSocialFolder'])->name('addSocialFolder');
Route::post('/serd/destroy', [App\Http\Controllers\SerdCardsController::class,'destroy'])->name('destroy');

Route::get('/test', function () {
    return view('guest.home');
});

// Route::get('/test2', function () {
//     return view('guest.');
// });
    
Route::get('/serd/getpermissions', [App\Http\Controllers\SerdCardsController::class,'getPermissions'])->name('getUserPermissions');
    
Route::post('/psy/store', [App\Http\Controllers\PsyCardsController::class,'store'])->name('store');


Route::get('/psy/getPsyCards', [App\Http\Controllers\PsyCardsController::class,'index'])->name('getPsyCards');
Route::get('/psy/getPsyCardById/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyCardById'])->name('getPsyCardById');
Route::get('/psy/getPsyCardsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyCardsByUserIstanceId'])->name('getPsyCardsByUserIstanceId');

Route::post('/psy/addSuicideAssessment', [App\Http\Controllers\PsyCardsController::class,'addSuicideAssessment'])->name('addSuicideAssessment');
Route::get('/psy/getSuicideAssessmentsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getSuicideAssessmentsByPsyId'])->name('getSuicideAssessmentsByPsyId');

Route::post('/psy/addMentalHealthDepartment', [App\Http\Controllers\PsyCardsController::class,'addMentalHealthDepartment'])->name('addMentalHealthDepartment');
Route::get('/psy/getMentalHealthDepartmentsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getMentalHealthDepartmentsByPsyId'])->name('getMentalHealthDepartmentsByPsyId');

Route::post('/psy/addRehabilitationPsychiatricCard', [App\Http\Controllers\PsyCardsController::class,'addRehabilitationPsychiatricCard'])->name('addRehabilitationPsychiatricCard');
Route::get('/psy/getRehabilitationPsychiatricCardsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getRehabilitationPsychiatricCardsByPsyId'])->name('getRehabilitationPsychiatricCardsByPsyId');

Route::get('/psy/getpermissions', [App\Http\Controllers\PsyCardsController::class,'getPermissions'])->name('getUserPermissions');



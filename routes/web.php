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


// Route::get('printPdf/{id}', [App\Http\Controllers\PsyCardsController::class,'printPdf'])->name('printPdf');
Route::get('printPdf/{id}', [App\Http\Controllers\NursingRecordController::class,'printPdf'])->name('printPdf');



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










Route::get('/psy/getPsySuicideAssessments', [App\Http\Controllers\PsyCardsController::class,'getPsySuicideAssessments'])->name('getPsySuicideAssessments');
Route::post('/psy/addPsySuicideAssessment', [App\Http\Controllers\PsyCardsController::class,'addPsySuicideAssessment'])->name('addPsySuicideAssessment');
Route::get('/psy/getSuicideAssessmentsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getSuicideAssessmentsByPsyId'])->name('getSuicideAssessmentsByPsyId');
Route::get('/psy/getPsySuicideAssessmentsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsySuicideAssessmentsByUserIstanceId'])->name('getPsySuicideAssessmentsByUserIstanceId');







Route::get('/psy/getPsyMentalHealthDepartments', [App\Http\Controllers\PsyCardsController::class,'getPsyMentalHealthDepartments'])->name('getPsyMentalHealthDepartments');
Route::post('/psy/addPsyMentalHealthDepartment', [App\Http\Controllers\PsyCardsController::class,'addPsyMentalHealthDepartment'])->name('addPsyMentalHealthDepartment');
Route::get('/psy/getMentalHealthDepartmentsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getMentalHealthDepartmentsByPsyId'])->name('getMentalHealthDepartmentsByPsyId');
Route::get('/psy/getPsyMentalHealthDepartmentsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyMentalHealthDepartmentsByUserIstanceId'])->name('getPsyMentalHealthDepartmentsByUserIstanceId');




Route::get('/psy/getPsyRehabilitationPsychiatricCards', [App\Http\Controllers\PsyCardsController::class,'getPsyRehabilitationPsychiatricCards'])->name('getPsyRehabilitationPsychiatricCards');
Route::post('/psy/addPsyRehabilitationPsychiatricCard', [App\Http\Controllers\PsyCardsController::class,'addPsyRehabilitationPsychiatricCard'])->name('addPsyRehabilitationPsychiatricCard');
Route::get('/psy/getRehabilitationPsychiatricCardsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getRehabilitationPsychiatricCardsByPsyId'])->name('getRehabilitationPsychiatricCardsByPsyId');
Route::get('/psy/getPsyRehabilitationPsychiatricCardsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyRehabilitationPsychiatricCardsByUserIstanceId'])->name('getPsyRehabilitationPsychiatricCardsByUserIstanceId');


Route::get('/psy/getPsyRatings', [App\Http\Controllers\PsyCardsController::class,'getPsyRatings'])->name('getPsyRatings');
Route::post('/psy/addPsyRating', [App\Http\Controllers\PsyCardsController::class,'addPsyRating'])->name('addPsyRating');
Route::get('/psy/getRatingsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getRatingsByPsyId'])->name('getRatingsByPsyId');
Route::get('/psy/getPsyRatingsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyRatingsByUserIstanceId'])->name('getPsyRatingsByUserIstanceId');


Route::get('/psy/getPsyUocDepartments', [App\Http\Controllers\PsyCardsController::class,'getPsyUocDepartments'])->name('getPsyUocDepartments');
Route::post('/psy/addPsyUocDepartment', [App\Http\Controllers\PsyCardsController::class,'addPsyUocDepartment'])->name('addPsyUocDepartment');
Route::get('/psy/getUocDepartmentsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getUocDepartmentsByPsyId'])->name('getUocDepartmentsByPsyId');
Route::get('/psy/getPsyUocDepartmentsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyUocDepartmentsByUserIstanceId'])->name('getPsyUocDepartmentsByUserIstanceId');


Route::get('/psy/getPsySocialFolders', [App\Http\Controllers\PsyCardsController::class,'getPsySocialFolders'])->name('getPsySocialFolders');
Route::post('/psy/addPsySocialFolder', [App\Http\Controllers\PsyCardsController::class,'addPsySocialFolder'])->name('addPsySocialFolder');
Route::get('/psy/getSocialFoldersByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getSocialFoldersByPsyId'])->name('getSocialFoldersByPsyId');
Route::get('/psy/getPsySocialFoldersByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsySocialFoldersByUserIstanceId'])->name('getPsySocialFoldersByUserIstanceId');


Route::get('/psy/getPsyMembershipCards', [App\Http\Controllers\PsyCardsController::class,'getPsyMembershipCards'])->name('getPsyMembershipCards');
Route::post('/psy/addMemberShipCard', [App\Http\Controllers\PsyCardsController::class,'addMemberShipCard'])->name('addMemberShipCard');
Route::get('/psy/getMemberShipCardsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getMemberShipCardsByPsyId'])->name('getMemberShipCardsByPsyId');
Route::get('/psy/getPsyMembershipCardsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyMembershipCardsByUserIstanceId'])->name('getPsyMembershipCardsByUserIstanceId');



Route::get('/psy/getPsySurveys', [App\Http\Controllers\PsyCardsController::class,'getPsySurveys'])->name('getPsySurveys');
Route::post('/psy/addPsySurvey', [App\Http\Controllers\PsyCardsController::class,'addPsySurvey'])->name('addPsySurvey');
Route::get('/psy/getSurveysByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getSurveysByPsyId'])->name('getSurveysByPsyId');
Route::get('/psy/getPsySurveysByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsySurveysByUserIstanceId'])->name('getPsySurveysByUserIstanceId');






Route::get('/psy/getPsyJsats', [App\Http\Controllers\PsyCardsController::class,'getPsyJsats'])->name('getPsyJsats');
Route::post('/psy/addJsat', [App\Http\Controllers\PsyCardsController::class,'addJsat'])->name('addJsat');
Route::get('/psy/getJsatsByPsyId/{id}', [App\Http\Controllers\PsyCardsController::class,'getJsatsByPsyId'])->name('getJsatsByPsyId');
Route::get('/psy/getPsyJsatsByUserIstanceId/{id}', [App\Http\Controllers\PsyCardsController::class,'getPsyJsatsByUserIstanceId'])->name('getPsyJsatsByUserIstanceId');









   
// Route::post('/therapies/store', [App\Http\Controllers\NursingRecordController::class,'store'])->name('store');


Route::get('/therapies/getTraceabilityTherapys', [App\Http\Controllers\NursingRecordController::class,'index'])->name('getTraceabilityTherapys');
Route::get('/therapies/getTraceabilityTherapyById/{id}', [App\Http\Controllers\NursingRecordController::class,'getTraceabilityTherapyById'])->name('getTraceabilityTherapyById');
Route::get('/therapies/getTraceabilityTherapysByUserIstanceId/{id}', [App\Http\Controllers\NursingRecordController::class,'getTraceabilityTherapysByUserIstanceId'])->name('getTraceabilityTherapysByUserIstanceId');
Route::post('/therapies/addTraceabilityTherapy', [App\Http\Controllers\NursingRecordController::class,'addTraceabilityTherapy'])->name('addTraceabilityTherapy');


// Route::get('/therapies/Archive', [App\Http\Controllers\NursingRecordController::class,'Archive'])->name('Archive');



// Route::get('/therapies/getNursingTherapys', [App\Http\Controllers\NursingRecordController::class,'index'])->name('getNursingTherapys');
// Route::get('/therapies/getNursingTherapyById/{id}', [App\Http\Controllers\NursingRecordController::class,'getNursingTherapyById'])->name('getNursingTherapyById');
// Route::get('/therapies/getNursingTherapysByUserIstanceId/{id}', [App\Http\Controllers\NursingRecordController::class,'getNursingTherapysByUserIstanceId'])->name('getNursingTherapysByUserIstanceId');
// Route::post('/therapies/addNursingTherapy', [App\Http\Controllers\NursingRecordController::class,'addNursingTherapy'])->name('addNursingTherapy');



Route::get('/therapies/getMonitoringClinicalParameters', [App\Http\Controllers\NursingRecordController::class,'index'])->name('getMonitoringClinicalParameters');
Route::get('/therapies/getMonitoringClinicalParameterById/{id}', [App\Http\Controllers\NursingRecordController::class,'getMonitoringClinicalParameterById'])->name('getMonitoringClinicalParameterById');
Route::get('/therapies/getMonitoringClinicalParametersByUserIstanceId/{id}', [App\Http\Controllers\NursingRecordController::class,'getMonitoringClinicalParametersByUserIstanceId'])->name('getMonitoringClinicalParametersByUserIstanceId');
Route::post('/therapies/addMonitoringClinicalParameter', [App\Http\Controllers\NursingRecordController::class,'addMonitoringClinicalParameter'])->name('addMonitoringClinicalParameter');




Route::get('/therapies/getClinicalParameterCollections', [App\Http\Controllers\NursingRecordController::class,'index'])->name('getClinicalParameterCollections');
Route::get('/therapies/getClinicalParameterCollectionById/{id}', [App\Http\Controllers\NursingRecordController::class,'getClinicalParameterCollectionById'])->name('getClinicalParameterCollectionById');
Route::get('/therapies/getClinicalParameterCollectionsByUserIstanceId/{id}', [App\Http\Controllers\NursingRecordController::class,'getClinicalParameterCollectionsByUserIstanceId'])->name('getClinicalParameterCollectionsByUserIstanceId');
Route::post('/therapies/addClinicalParameterCollection', [App\Http\Controllers\NursingRecordController::class,'addClinicalParameterCollection'])->name('addClinicalParameterCollection');





Route::get('/therapies/getCollectionFormHgts', [App\Http\Controllers\NursingRecordController::class,'index'])->name('getCollectionFormHgts');
Route::get('/therapies/getCollectionFormHgtById/{id}', [App\Http\Controllers\NursingRecordController::class,'getCollectionFormHgtById'])->name('getCollectionFormHgtById');
Route::get('/therapies/getCollectionFormHgtsByUserIstanceId/{id}', [App\Http\Controllers\NursingRecordController::class,'getCollectionFormHgtsByUserIstanceId'])->name('getCollectionFormHgtsByUserIstanceId');
Route::post('/therapies/addCollectionFormHgt', [App\Http\Controllers\NursingRecordController::class,'addCollectionFormHgt'])->name('addCollectionFormHgt');





Route::get('/therapies/getMonitoringPrescriptionTaos', [App\Http\Controllers\NursingRecordController::class,'index'])->name('getMonitoringPrescriptionTaos');
Route::get('/therapies/getMonitoringPrescriptionTaoById/{id}', [App\Http\Controllers\NursingRecordController::class,'getMonitoringPrescriptionTaoById'])->name('getMonitoringPrescriptionTaoById');
Route::get('/therapies/getMonitoringPrescriptionTaosByUserIstanceId/{id}', [App\Http\Controllers\NursingRecordController::class,'getMonitoringPrescriptionTaosByUserIstanceId'])->name('getMonitoringPrescriptionTaosByUserIstanceId');
Route::post('/therapies/addMonitoringPrescriptionTao', [App\Http\Controllers\NursingRecordController::class,'addMonitoringPrescriptionTao'])->name('addMonitoringPrescriptionTao');




Route::get('/therapies/getNursingTherapysByUserIstanceId/{id}', [App\Http\Controllers\NursingRecordController::class,'getNursingTherapysByUserIstanceId'])->name('getNursingTherapysByUserIstanceId');



Route::get('/psy/getpermissions', [App\Http\Controllers\PsyCardsController::class,'getPermissions'])->name('getUserPermissions');



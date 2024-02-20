<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PatientController::class, 'view_patients']);

Route::post('/save_patient', [PatientController::class, 'create_patient']);

Route::get('/delete_patient/{id}', [PatientController::class, 'destroy']);

Route::get('/edit_patient/{id}', [PatientController::class, 'view_edit_patient']);

Route::post('/update_patient/{id}', [PatientController::class, 'save_edit_patient']);

Route::get('/doctors', [DoctorController::class, 'view_doctors']);

Route::post('/save_doctor', [DoctorController::class, 'create_doctor']);

Route::get('/delete_doctor/{id}', [DoctorController::class, 'destroy']);

Route::get('/edit_doctor/{id}', [DoctorController::class, 'view_edit_doctor']);

Route::post('/update_doctor/{id}', [DoctorController::class, 'update_doctor']);

// _____________________________IMAGE_________________________________

Route::get('/upload', [Controller::class, 'view_upload']);

Route::post('/upload_file', [Controller::class, 'upload_photo']);

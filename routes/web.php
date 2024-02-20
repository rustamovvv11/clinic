<?php

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome', ['patients' => Patient::all(), 'doctors' => Doctor::all()]);
});


Route::post('/save_patient', function (Request $request) {

    Patient::create([
        'name' => $request->name,
        'birth_date' => $request->birth_date,
        'phone' => $request->phone,
        'disease' => $request->disease,
        'room' => $request->room,
        'date' => $request->date,
        'doctor_id' => $request->doctor
    ]);

    return back();
});

Route::get('/delete_patient/{id}', function ($id) {

    Patient::where('id', '=', $id)->first()->delete();

    return back();
});


Route::get('/edit_patient/{id}', function ($id) {

    return view('edit-patient', ['patient' => Patient::where('id', '=', $id)->first()]);
});

Route::post('/update_patient/{id}', function (Request $req, $id) {
    Patient::where('id', '=', $id)->first()->update([
        'name' => $req->name,
        'birth_date' => $req->birth_date,
        'phone' => $req->phone,
        'disease' => $req->disease,
        'room' => $req->room,
        'date' => $req->date
    ]);

    return redirect('/');
});


Route::get('/doctors', function () {
    return view('doctors', ['doctors' => Doctor::all()]);
});


Route::post('/save_doctor', function (Request $request) {

    Doctor::create([
        'full_name' => $request->full_name,
        'birth_date' => $request->birth_date,
        'experience' => $request->experience
    ]);

    return back();
});

Route::get('/delete_doctor/{id}', function ($id) {

    Doctor::where('id', '=', $id)->first()->delete();

    return back();
});


Route::get('/edit_doctor/{id}', function ($id) {

    return view('edit-doctor', ['doctor' => Doctor::where('id', '=', $id)->first()]);
});

Route::post('/update_doctor/{id}', function (Request $req, $id) {
    Doctor::where('id', '=', $id)->first()->update([
        'full_name' => $req->full_name,
        'birth_date' => $req->birth_date,
        'experience' => $req->experience
    ]);

    return redirect('/doctors');
});

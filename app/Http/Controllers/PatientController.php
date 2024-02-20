<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    function view_patients()
    {
        return view('welcome', ['patients' => Patient::all(), 'doctors' => Doctor::all()]);
    }

    function create_patient(Request $request) {

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
    }

    function destroy($id) {

        Patient::where('id', '=', $id)->first()->delete();

        return back();
    }

    function view_edit_patient($id) {

        return view('edit-patient', ['patient' => Patient::where('id', '=', $id)->first()]);
    }


    function save_edit_patient(Request $req, $id) {
        Patient::where('id', '=', $id)->first()->update([
            'name' => $req->name,
            'birth_date' => $req->birth_date,
            'phone' => $req->phone,
            'disease' => $req->disease,
            'room' => $req->room,
            'date' => $req->date
        ]);

        return redirect('/');
    }
}

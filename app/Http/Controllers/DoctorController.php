<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function view_doctors()
    {
        return view('doctors', ['doctors' => Doctor::all()]);
    }

    function create_doctor(Request $request)
    {

        Doctor::create([
            'full_name' => $request->full_name,
            'birth_date' => $request->birth_date,
            'experience' => $request->experience
        ]);

        return back();
    }

    function destroy($id)
    {
        Doctor::where('id', '=', $id)->first()->delete();

        return back();
    }


    function view_edit_doctor($id)
    {
        return view('edit-doctor', ['doctor' => Doctor::where('id', '=', $id)->first()]);
    }

    function update_doctor(Request $req, $id)
    {
        Doctor::where('id', '=', $id)->first()->update([
            'full_name' => $req->full_name,
            'birth_date' => $req->birth_date,
            'experience' => $req->experience
        ]);

        return redirect('/doctors');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function view_upload()
    {
        return view('upload');
    }

    function upload_photo(Request $req) {

        if ($req->file('photo')) {
            $req->file('photo')->store('public');
        }

        return 'success';
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function search(Request $request)
    {
        $parcelUser = Admin::where('parcel_id', $request->parcel_id)->get();

        return view("/dashboard", compact('parcelUser'));
    }
}

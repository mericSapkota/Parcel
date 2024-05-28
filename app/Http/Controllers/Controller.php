<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\ParcelDetails;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function search(Request $request)
    {

        $parcel = ParcelDetails::where('parcel_id', $request->parcel_id)->get();
        $pid = null;
        foreach ($parcel as $p) {
            $pid = $p->parcel_id;
        }
        return view("/welcome", compact('parcel', 'pid'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\ParcelDetails;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-parcels');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Admin::create(['parcel_id' => $request->parcel_id]);
        ParcelDetails::create($request->all());
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin, $id)
    {
        $parcel = Admin::find($id);
        return view("edit-parcels", compact('parcel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, Admin $admin)
    {
        $parcel = Admin::find($id);
        $parcel->update($request->all());
        return redirect("/dashboard");
    }
    public function update1($id)
    {
        $parcel = Admin::where('parcel_id', $id)->get();
        $p = $parcel[0];

        return view("update-parcel", compact('p'));
    }
    public function update2($id, Request $request)
    {

        ParcelDetails::create($request->all());
        return redirect('/dashboard');
    }

    public function editCondition($id)
    {
        $parcel = ParcelDetails::find($id);

        return view('components.edit-parcel-details', compact('parcel'));
    }

    public function storeEditedCondition($id, Request $request)
    {
        $parcel = ParcelDetails::find($id);

        $parcel->update($request->all());

        return redirect("/dashboard");
    }
    public function destroy(Admin $admin, $id)
    {
        $parcel = ParcelDetails::find($id);
        $parcel->delete($parcel);
        return redirect('/dashboard'); 
    }
}

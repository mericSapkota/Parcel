<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
        Admin::create($request->all());
        $parcel = Admin::all();
        return view("/dashboard", compact('parcel'));
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

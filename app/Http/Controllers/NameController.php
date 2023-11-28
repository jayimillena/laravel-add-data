<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $names = new Name();
        $names->fullname = $request->fullname;
        $names->age = $request->age;
        $names->address = $request->address;

        $names->save();

        return redirect()->route('home');
    }   

    /**
     * Display the specified resource.
     */
    public function show(Name $name)
    {
        return view('show-names', [
            'names' => Name::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Name $name)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Name $name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Name $name)
    {
        //
    }
}

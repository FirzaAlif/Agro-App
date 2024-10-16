<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farmers = Farmer::all();
        return  view('farmers.index', compact('farmers'));
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
    public function store(StoreFarmerRequest $request)
    {
        Farmer::create([
            'name' => $request->name,
            'age' => $request->age,
            'experience' => $request->experience,
            'assets' => $request->assets,
            'relation' => $request->relation
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farmer $farmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarmerRequest $request, Farmer $farmer)
    {
        $farmer->update([
            'name' => $request->name,
            'age' => $request->age,
            'experience' => $request->experience,
            'assets' => $request->assets,
            'relation' => $request->relation
        ]);

        return redirect()->route('farmers.index')->with('success', 'Farmer  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farmer $farmer)
    {
        try{
            $farmer->delete();

        return redirect()->route('farmers.index')->with('success', 'Farmer created successfully.');
        } catch (\Exception $e){
            return redirect()->route('farmers.index')->with('error', 'Failed to delete farmer:' . $e->getMessage());
        }
    }
}

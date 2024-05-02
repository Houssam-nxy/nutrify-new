<?php

namespace App\Http\Controllers\Health;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HealthData;

class HealthDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get the authenticated user's ID
        $userId = auth()->id();
        $existingData = HealthData::where('user_id', $userId)->exists();
        if ($existingData) {
            $healthData = HealthData::where('user_id', $userId)->first();
            $healthDataId = $healthData->id;
        
            return redirect()->route('health.edit', $healthDataId)->with('error', 'You have already submitted your health data.');
        }
        
        return view('health.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'condition' => 'nullable|string',
            'ethnicity' => 'nullable|string',
            'about' => 'nullable|string',
        ]);

        $userId = auth()->id();

        $healthData = new HealthData();
        $healthData->user_id = $userId;
        $healthData->height = $validatedData['height'];
        $healthData->weight = $validatedData['weight'];
        $healthData->age = $validatedData['age'];
        $healthData->gender = $validatedData['gender'];
        $healthData->condition = $validatedData['condition'];
        $healthData->ethnicity = $validatedData['ethnicity'];
        $healthData->about = $validatedData['about'];
        $healthData->save();

        // Success 
        return view('recipes.index')->with('success', 'Health data saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $healthData = HealthData::findOrFail($id);

        // Check if the authenticated user is the owner of the health data
        if ($healthData->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $healthData = HealthData::find($id);

        // If health data does not exist, redirect to create page
        if (!$healthData) {
            return redirect()->route('health.create')->with('error', 'Health data not found.');
        }

        return view('health.edit', compact('healthData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $healthData = HealthData::findOrFail($id);
        // Check if the authenticated user is the owner of the health data
        if ($healthData->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $validatedData = $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'condition' => 'nullable|string',
            'ethnicity' => 'nullable|string',
            'about' => 'nullable|string',
        ]);

        $healthData = HealthData::findOrFail($id);
        $healthData->height = $validatedData['height'];
        $healthData->weight = $validatedData['weight'];
        $healthData->age = $validatedData['age'];
        $healthData->gender = $validatedData['gender'];
        $healthData->condition = $validatedData['condition'];
        $healthData->ethnicity = $validatedData['ethnicity'];
        $healthData->about = $validatedData['about'];
        $healthData->save();

        return redirect()->route('health.edit', ['health' => $id])->with('success', 'Health data updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

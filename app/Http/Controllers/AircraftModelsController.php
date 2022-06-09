<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAircraftModelRequest;
use App\Models\Aircraft;
use Illuminate\Http\Request;

class AircraftModelsController extends Controller
{
    public function index()
    {
        $acftmodels = Aircraft::paginate(10);
        return view('acftmodels', compact('acftmodels'));
    }

    public function create()
    {
        return view('create_acftmodels');
    }

    public function store(StoreAircraftModelRequest $request)
    {
        Aircraft::create($request->validated());
        return back()->with('success', 'Aircraft model created successfully');
    }

    public function show(Aircraft $aircraftModel)
    {
        //
    }

    public function edit(Aircraft $aircraftModel)
    {
        //
    }

    public function update(Request $request, Aircraft $aircraftModel)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

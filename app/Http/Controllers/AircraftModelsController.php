<?php

namespace App\Http\Controllers;

use App\Http\Requests\AircraftModelRequest;
use App\Models\AircraftModel;
use Illuminate\Http\Request;

class AircraftModelsController extends Controller
{
    public function index()
    {
        $acftmodels = AircraftModel::paginate(10);
        return view('acftmodels', compact('acftmodels'));
    }

    public function create()
    {
        return view('create_acftmodels');
    }

    public function store(AircraftModelRequest $request)
    {
        AircraftModel::create($request->validated());
        return back()->with('success', 'Aircraft model created successfully');
    }

    public function show(AircraftModel $aircraftModel)
    {
        //
    }

    public function edit(AircraftModel $aircraftModel)
    {
        //
    }

    public function update(Request $request, AircraftModel $aircraftModel)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

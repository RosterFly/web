<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHangarRequest;
use App\Http\Requests\UpdateHangarRequest;
use App\Models\AircraftModel;
use App\Models\Hangar;
use Illuminate\Http\Request;

class HangarsController extends Controller
{
    public function index()
    {
        $hangars = Hangar::paginate(10);
        return view('hangar', compact('hangars'));
    }

    public function create()
    {
        $aircraftmodels=AircraftModel::all();
        return view('create_hangar', compact('aircraftmodels'));
    }

    public function store(StoreHangarRequest $request)
    {
        Hangar::create($request->validated());
        return redirect()->route('hangar');
    }

    public function show(Hangar $hangar)
    {
        //
    }

    public function edit(Hangar $hangar)
    {
        return view('hangar_edit', compact('hangar'));
    }

    public function update(UpdateHangarRequest $request, Hangar $hangar)
    {
        $hangar->update($request->validated());
        return redirect()->route('hangar');
    }

    public function destroy($id)
    {
        $hangar = Hangar::find($id);
        $hangar->delete();

        return redirect()->route('hangar');
    }
}

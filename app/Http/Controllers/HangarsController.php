<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHangarRequest;
use App\Http\Requests\UpdateHangarRequest;
use App\Models\Aircraft;
use App\Models\Hangar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HangarsController extends Controller
{
    public function index()
    {
        $hangars = Hangar::where('userid', Auth::user()->id)->paginate(10);
        return view('hangar', compact('hangars'));
    }

    public function create()
    {
        $aircraftmodels=Aircraft::all();
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
        $aircraftmodels=Aircraft::all();
        return view('hangar_edit', compact('hangar', 'aircraftmodels'));
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

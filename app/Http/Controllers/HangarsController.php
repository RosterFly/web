<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHangarRequest;
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
        return view('create_hangar');
    }

    public function store(StoreHangarRequest $request)
    {
        Hangar::create($request->validated());
        return back()->with('success', 'Hangar created successfully');
    }

    public function show(Hangar $hangar)
    {
        //
    }

    public function edit(Hangar $hangar)
    {
        return view('hangar_edit', compact('hangar'));
    }

    public function update(Request $request, Hangar $hangar)
    {
        //
    }

    public function destroy(Hangar $hangar)
    {
        //
    }
}

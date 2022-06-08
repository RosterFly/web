<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FlightsController extends Controller
{
    public function index()
    {
        $flights = Flight::where('userid', Auth::user()->id)->paginate(10);
        return view('flights', compact('flights'));
    }

    public function create()
    {
        return view('create_flight');
    }

    public function store(StoreFlightRequest $request)
    {
        $flight=Flight::create($request->validated());
        return back()->with('success', 'Flight created successfully');
    }

    public function show(Flight $flight)
    {
        //
    }

    public function edit(Flight $flight)
    {
        return view('flight_edit', compact('flight'));
    }

    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        $flight->update($request->validated());
        return back()->with('success', 'Flight updated successfully');
    }

    public function destroy(Flight $flight)
    {
        dd($flight);
        $flight = Flight::find($flight);
        $flight->delete();

        return back()->with('success', 'Flight deleted successfully');
    }
}

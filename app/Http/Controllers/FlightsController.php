<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FlightsController extends Controller
{
    public function index()
    {
        return view('flights');
    }

    public function create()
    {
        return view('create_flight');
    }

    public function store(Request $request)
    {

    }

    public function show(Flight $flight)
    {
        //
    }

    public function edit(Flight $flight)
    {
        //
    }

    public function update(Request $request, Flight $flight)
    {
        //
    }

    public function destroy(Flight $flight)
    {
        //
    }
}

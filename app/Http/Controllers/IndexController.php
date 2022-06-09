<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $totalusers = User::count();
        $totalflights = Flight::count();
        $totalpassengers = Flight::sum('passengers');
        $totalfob = Flight::sum('fob');
        $flight = Flight::where('userid', Auth::user()->id);
        $flightsbyuser = $flight->count();
        $hours=0;
        $passengersbyuser = $flight->sum('passengers');
        $cargobyuser = $flight->sum('cargo');
        $flights = $flight->orderBy('etd', 'DESC')->paginate(10);
        $top5aircraft = Flight::selectRaw('aircraftid, count(*) as total')
            ->groupBy('aircraftid')
            ->orderBy('total', 'desc')
            ->limit(5)
            ->get();
        $getetad=Flight::select('etd', 'eta')->where('userid', Auth::user()->id)->get();
        for($i=0; $i<count($getetad); $i++){
            $eta=Carbon::parse($getetad[$i]->eta)->format('d-m-Y H:i:s');
            $etd=Carbon::parse($getetad[$i]->etd)->format('d-m-Y H:i:s');
            $hours += Carbon::parse($eta)->diffInHours($etd);
        }
        $eta0= Carbon::parse($getetad[0]->eta)->format('d-m-Y H:i:s');
        return view('index', compact('totalusers', 'totalflights', 'totalpassengers', 'totalfob', 'flightsbyuser', 'hours', 'passengersbyuser', 'cargobyuser', 'flights', 'top5aircraft', 'eta0'));
    }
}

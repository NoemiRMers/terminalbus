<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{

    public function index()
    {
        $travel = Travel::All();
        return $travel;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $travel = new Travel();
        $travel->typeTravel = $request->typeTravel;
        $travel->dateTravel = $request->dateTravel;
        $travel->timeTravel = $request->timeTravel;
        $travel->fareTravel = $request->fareTravel;
        $travel->idDeparture = $request->idDeparture;
        $travel->idArrival = $request->idArrival;
        $travel->idBus = $request->idBus;

        $travel->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $travel = Travel::findOrFail($id);
        $travel->typeTravel = $request->typeTravel;
        $travel->dateTravel = $request->dateTravel;
        $travel->timeTravel = $request->timeTravel;
        $travel->fareTravel = $request->fareTravel;
        $travel->idDeparture = $request->idDeparture;
        $travel->idArrival = $request->idArrival;
        $travel->idBus = $request->idBus;

        $travel->save();
    }

    public function destroy($id)
    {
        $travel = Travel::destroy($id);
        return $travel;
    }
}

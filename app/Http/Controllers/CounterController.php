<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{

    public function index()
    {
        $counter = Counter::All();
        return $counter;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $counter = new Counter();
        $counter->idUserk = $request->idUserk;
        $counter->employeeCode = $request->employeeCode;

        $counter->save();
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
        $counter = Counter::findOrFail($id);
        $counter->idUserk = $request->idUserk;
        $counter->employeeCode = $request->employeeCode;

        $counter->save();
    }

    public function destroy($id)
    {
        $counter = Counter::destroy($id);
        return $counter;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{

    public function index()
    {
        $ticket = Ticket::All();
        return $ticket;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket->typeTicket = $request->typeTicket;
        $ticket->fareTicket = $request->fareTicket;
        $ticket->idUserPassenger = $request->idUserPassenger;
        $ticket->idTravel = $request->idTravel;

        $ticket->save();
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
        $ticket = Ticket::findOrFail($id);
        $ticket->typeTicket = $request->typeTicket;
        $ticket->fareTicket = $request->fareTicket;
        $ticket->idUserPassenger = $request->idUserPassenger;
        $ticket->idTravel = $request->idTravel;

        $ticket->save();
    }

    public function destroy($id)
    {
        $ticket = Ticket::destroy($id);
        return $ticket;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TicketType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        $ticketTypes = TicketType::all();
        return Inertia::render("TicketTypes/Index", [
            "event" => $event,
            "ticketTypes" => $ticketTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        return Inertia::render("TicketTypes/Create", [
            "event" => $event
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketType $ticketType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketType $ticketType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TicketType $ticketType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketType $ticketType)
    {
        //
    }
}
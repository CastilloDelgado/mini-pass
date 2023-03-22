<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sale;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Event $event)
    {
        $sale = Sale::create([
            'user_id' => auth()->id(),
            'event_id' => $event->id,
            'status' => 0
        ]);

        foreach ($request->all() as $type => $quantity) {
            if ($quantity > 0) {
                for ($count = 0; $count < $quantity; $count++) {
                    Ticket::create([
                        'uuid' => Str::uuid()->toString(),
                        'sale_id' => $sale->id,
                        'ticket_type_id' => $type,
                    ]);
                }
            }
        }

        return to_route('sales.show', [$event, $sale]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event, Sale $sale)
    {
        $sale->tickets;

        // Adding tickets summary to sale model
        $ticketsSummary = [];

        foreach($sale->tickets as $ticket){
            $ticketsSummary[""]["count"] = $ticketsSummary[""]["count"] + 1;
        }

        return Inertia::render('Purchases/Show', [
            "event" => $event,
            "sale" => $sale
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
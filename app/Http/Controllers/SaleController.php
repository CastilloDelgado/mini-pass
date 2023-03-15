<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sale;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        return ($sale);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
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
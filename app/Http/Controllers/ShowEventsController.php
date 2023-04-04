<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ShowEventsController extends Controller
{
    public function welcome()
    {
        $events = Event::orderBy('date')->get();

        foreach ($events as $key => $event) {
            $events[$key]["public_url"] = Storage::disk('s3')->temporaryUrl($event->main_image, now()->addMinutes(5));
        }

        return Inertia::render('Billboards/Welcome', [
            'events' => $events
        ]);
    }

    public function show(Event $event)
    {
        $event->ticket_types;


        // Get price range
        $prices = DB::table('ticket_types')->select('price')->where('event_id', $event->id)->get();
        $priceValues = [];

        foreach ($prices as $price) {
            $priceValues[] = $price->price;
        }

        $event["prices"] = [
            "min" => min($priceValues),
            "max" => max($priceValues)
        ];

        $event["public_url"] = Storage::disk('s3')->temporaryUrl($event->main_image, now()->addMinutes(5));

        return Inertia::render('Billboards/Show', [
            'event' => $event
        ]);
    }
}
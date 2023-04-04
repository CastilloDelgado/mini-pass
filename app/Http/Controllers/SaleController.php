<?php
namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\Event;
use App\Models\Sale;
use App\Models\Ticket;
use App\Models\TicketType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Mailgun\Mailgun;

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
        // Adding public image url
        $event["public_url"] = Storage::disk('s3')->temporaryUrl($event->main_image, now()->addMinutes(5));

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

        // Adding tickets summary to sale model
        $sale->tickets;
        $tickets = $sale->tickets;
        $ticketsSummary = [];

        foreach ($tickets as $ticket) {
            if (isset($ticketsSummary[$ticket->ticket_type_id])) {
                $ticketsSummary[$ticket->ticket_type_id] += 1;
            } else {
                $ticketsSummary[$ticket->ticket_type_id] = 1;
            }
        }

        $saleSummary = [];
        $total = 0;

        foreach ($ticketsSummary as $type => $quantity) {
            $ticketType = TicketType::find($type);
            $total += ($ticketType->price + ($ticketType->price * 0.2)) * $quantity;
            $saleSummary[] = [
                "title" => $ticketType->title,
                "description" => $ticketType->description,
                "price" => $ticketType->price,
                "charge" => $ticketType->price * 0.2,
                "quantity" => $quantity,
                "total" => ($ticketType->price + ($ticketType->price * 0.2)) * $quantity,
            ];
        }

        return Inertia::render('Purchases/Show', [
            "event" => $event,
            "sale" => ["table" => $saleSummary, "total" => $total, "info" => $sale]
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

    public function confirm(Request $request)
    {

        Mail::to($request->user())->send(new OrderShipped());
    }
}
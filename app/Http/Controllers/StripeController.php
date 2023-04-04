<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\TicketType;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function getSessionTest(Sale $sale)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_API_KEY'));

        // // Adding tickets summary to sale model
        // $sale->tickets;
        // $tickets = $sale->tickets;
        // $ticketsSummary = [];

        // foreach ($tickets as $ticket) {
        //     if (isset($ticketsSummary[$ticket->ticket_type_id])) {
        //         $ticketsSummary[$ticket->ticket_type_id] += 1;
        //     } else {
        //         $ticketsSummary[$ticket->ticket_type_id] = 1;
        //     }
        // }

        // $saleSummary = [];
        // $total = 0;

        // foreach ($ticketsSummary as $type => $quantity) {
        //     $ticketType = TicketType::find($type);
        //     $total += ($ticketType->price + ($ticketType->price * 0.2)) * $quantity;
        //     $saleSummary[] = [
        //         "title" => $ticketType->title,
        //         "description" => $ticketType->description,
        //         "price" => $ticketType->price,
        //         "charge" => $ticketType->price * 0.2,
        //         "quantity" => $quantity,
        //         "total" => ($ticketType->price + ($ticketType->price * 0.2)) * $quantity,
        //     ];
        // }

        // $lineItems = [];
        // foreach ($saleSummary as $item) {
        //     $lineItems[] = [
        //         'price_data' => [
        //             'currency' => 'mxn',
        //             'unit_amount' => $item->price * 100,
        //             'product_data' => [
        //                 'name' => "Test"
        //             ],
        //         ],
        //         'quantity' => $item->quantity
        //     ];
        // }

        $checkout = $stripe->checkout->sessions->create([
            'success_url' => 'https://localhost:8000/success',
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'mxn',
                        'unit_amount' => 50000,
                        'product_data' => [
                            'name' => "Boletos para tame impala"
                        ],
                    ],
                    'quantity' => 1
                ],
            ],
            'mode' => 'payment',
        ]);

        return $checkout;
    }

    public function getSession(Sale $sale)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_API_KEY'));

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

        $event = $sale->event;

        $lineItems = [];
        foreach ($saleSummary as $key => $item) {
            $unit_amout = (floatval($item["price"]) * 100) + (floatval($item["price"]) * 0.2 * 100);
            $quantity = $item["quantity"];
            $name = $event["title"] . ' - ' . $item["title"];

            $lineItems[] = [
                'price_data' => [
                    'currency' => 'mxn',
                    'unit_amount' => $unit_amout,
                    'product_data' => [
                        'name' => $name
                    ],
                ],
                'quantity' => $quantity
            ];
        }

        $checkout = $stripe->checkout->sessions->create([
            'success_url' => route('stripe.checkout.success'),
            'line_items' => $lineItems,
            'mode' => 'payment',
        ]);

        return $checkout;
    }
}
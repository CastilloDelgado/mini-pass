<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function getSession()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_API_KEY'));

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
}
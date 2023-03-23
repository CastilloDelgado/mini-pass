<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Team;
use App\Models\TicketType;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Team::factory()->create([
            'user_id' => 1,
            'name' => "Basic team",
            'personal_team' => 1
        ]);

        User::factory()->create([
            'name' => 'Marco Admin',
            'email' => 'marco.admin@test.com',
            'current_team_id' => 1,
            'is_admin' => TRUE
        ]);

        User::factory()->create([
            'name' => 'Marco Cliente',
            'email' => 'marco.cliente@test.com',
            'current_team_id' => 1,
            'is_admin' => FALSE
        ]);

        Event::factory(30)->create();

        for ($event_id = 1; $event_id <= 30; $event_id++) {
            TicketType::factory()->create([
                "event_id" => $event_id,
                "title" => "Basico",
                "price" => 100.00,
                "quantity" => 100,
                "quantity_left" => 100
            ]);
            TicketType::factory()->create([
                "event_id" => $event_id,
                "title" => "Intermedio",
                "price" => 250.00,
                "quantity" => 50,
                "quantity_left" => 50
            ]);
            TicketType::factory()->create([
                "event_id" => $event_id,
                "title" => "Avanzado",
                "price" => 500.00,
                "quantity" => 25,
                "quantity_left" => 25
            ]);
        }
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function ticket_type()
    {
        return $this->belongsTo(TicketType::class);
    }
}
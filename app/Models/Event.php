<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function ticket_types()
    {
        return $this->hasMany(TicketType::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

}
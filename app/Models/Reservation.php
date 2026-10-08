<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    protected $fillable = [
        'room_id',
        'check_in_date',
        'check_out_date',
        'total_price',
        'status'
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
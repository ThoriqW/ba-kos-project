<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KosPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'kos_id',
        'front_photos',
        'interior_photos',
        'street_photos',
        'front_room_photos',
        'interior_room_photos',
        'bathroom_photos',
        'additional_room_photos',
    ];

    public function kos()
    {
        return $this->belongsTo(Kos::class);
    }
}

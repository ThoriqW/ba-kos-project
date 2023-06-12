<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kos_name',
        'kos_type',
        'kos_description',
        'kos_rule',
        'kos_note',
        'kos_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kosPhoto()
    {
        return $this->hasOne(KosPhoto::class);
    }
}

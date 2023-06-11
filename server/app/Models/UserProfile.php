<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_photo',
        'gender',
        'birthdate',
        'city',
        'status',
        'job',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
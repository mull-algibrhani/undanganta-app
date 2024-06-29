<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama',
        'jumlah',
        'status',
        'alamat',
        'rsvp_id',
    ];
}

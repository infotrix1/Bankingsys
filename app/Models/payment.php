<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'status',
        'trans_id',
        'channel',
        'ref_id',
        'user_id',
    ];
}

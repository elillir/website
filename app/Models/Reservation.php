<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_id',
        'customer_name',
        'customer_phone',
        'customer_email',
        'reservation_time',
        'guests_count',
        'special_requests'
    ];

    protected $dates = ['reservation_time'];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}

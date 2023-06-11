<?php

namespace App\Models;

use App\Models\event;
use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $table = 'tbl_ticket';

    protected $primaryKey = 'id';

    protected $fillable =[
        'event_id',
        'concert_name',
        'concert_date',
        'rundown',
        'concert_location',
        'price',
        'cat',
        'seat',
        // 'section',
        // 'ticket_price',
        // 'row',
    ];

    public function event()
    {
        return $this->belongsTo(event::class, 'event_id', 'id');
    }

    public function transaction()
    {
        return $this->hasOne(transaction::class, 'event_id', 'id');
    }

}




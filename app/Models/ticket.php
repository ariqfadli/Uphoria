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

    protected $fillable =[
        'ID_event',
        'Concert_Name',
        'CAT',
        'Seat',
        'Section',
        'Ticket_Price',
        'Row',
    ];

    public function event()
    {
        return $this->belongsTo(event::class, 'ID_ticket', 'id');
    }

}




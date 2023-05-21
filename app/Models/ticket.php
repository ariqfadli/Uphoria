<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $table = 'tbl_ticket';
    protected $primaryKey = 'ID_ticket';
    protected $fillable =[
        'ID_customer',
        'Ticket_name',
        'CAT',
        'Seat',
        'Ticket_amount',
        'Section',
        'Ticket_Price',
        'Row',
    ];
}




<?php

namespace App\Models;

use App\Models\ticket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'tbl_event';
   
    protected $fillable =[
        'id',
        'Rundown',
        'Concert_Name',
        'Concert_Date',
        'Concert_Location',
    ];

    public function ticket()
    {
        return $this->hasMany(ticket::class, 'event_id', 'id');
    }
}

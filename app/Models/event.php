<?php

namespace App\Models;

use App\Models\ticket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'tbl_event';

    protected $primaryKey = 'id';
   
    protected $fillable =[
        'concert_name',
        'concert_date',
        'rundown',
        'concert_location',
    ];

    public function ticket()
    {
        return $this->hasMany(ticket::class,'ticket_id', 'id');
    }
}

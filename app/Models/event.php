<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table = 'tbl_event';
    protected $primaryKey = 'ID_ticket';
    protected $fillable =[
        'Rundown',
        'Concert_Name',
        'Concert_Date',
        'Concert_Location',
    ];
}

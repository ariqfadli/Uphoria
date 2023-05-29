<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'tbl_transaction';

    protected $fillable =[

        'payment_method',
        'transaction_date',
        'total_price',
    ]; 
}

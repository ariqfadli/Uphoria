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
    protected $primaryKey = 'ID_transaction';
    protected $fillable =[
        'ID_ticket',
        'ID_customer',
        'Payment_Method',
        'Transaction_date',
        'Total_Price',
    ]; 
}

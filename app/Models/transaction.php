<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'user_id',
        'ticket_id',
        'name',
        'concert_name',
        'payment_method',
        'total_price',
        'transaction_date',

    ]; 

    public function user():BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function ticket():BelongsTo
    {
        return $this->belongsTo(ticket::class);
    }
}

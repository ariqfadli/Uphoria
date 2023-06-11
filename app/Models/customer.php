<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class customer extends Model
{
    use HasFactory;
    protected $table = 'tbl_customer';
    
    protected $fillable =[
        'id',
        'user_id',
        'name',
        'contacts',
        'address',
    ];

    public function transaction():HasOne
    {
        return $this->hasOne(transaction::class);
    }

    public function user():BelongsTo
    {
        return $this->hasMany(transaction::class);
    }
}

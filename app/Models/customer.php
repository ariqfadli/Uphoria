<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class customer extends Model
{
    use HasFactory;
    protected $table = 'tbl_customer';
    
    protected $fillable =[
        'id',
        'name',
        'contacts',
        'address',
    ];

    public function transaction():HasMany
    {
        return $this->hasMany(transaction::class);
    }
}

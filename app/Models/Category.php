<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'currency_id',
        'name',
        'value',
    ];

    public function cashReceiveds()
    {
        return $this->hasMany(CashReceived::class);
    }

    public function currency()
    {
      return $this->belongsTo(Currency::class);
    }
}

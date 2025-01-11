<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'currency_id',
        'Sell',
        'Buy',
    ];

    public function exchangeRates()
    {
        return $this->hasMany(ExchangeRate::class);
    }
}

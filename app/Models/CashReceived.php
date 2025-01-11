<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashReceived extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'currency_id',
        'category_id',
        'amount',
        'total',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function currency()
    {
      return $this->belongsTo(Currency::class);
    }

    public function exchangeRate()
    {
      return $this->belongsTo(ExchangeRate::class);
    }
}

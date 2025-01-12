<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];

    public function exchangeRates()
    {
        return $this->hasMany(ExchangeRate::class);
    }

    public function categories()
    {
      return $this->hasMany(Category::class);
    }
}

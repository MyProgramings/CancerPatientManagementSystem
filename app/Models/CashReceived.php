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
        'description',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    
    public function currency()
    {
      return $this->belongsTo(Currency::class);
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function scopeSearch($query, $term){
      $query->whereHas('user', function ($query) use ($term) {
          $query->where('name', 'like', "%$term%")
          ->orWhere('username','like', "%$term%");
      })
      ->orWhereHas('currency', function ($query) use ($term) {
          $query->where('name', 'like', "%$term%");
      })
      ->orWhereHas('category', function ($query) use ($term) {
          $query->where('name', 'like', "%$term%");
      });
  }
}

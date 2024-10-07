<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['product_name', 'amount', 'purchase_cycle_id'];

    public function purchaseCycle()
    {
        return $this->belongsTo(PurchaseCycle::class);
    }
}

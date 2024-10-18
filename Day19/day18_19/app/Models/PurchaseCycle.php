<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseCycle extends Model
{
    use HasFactory;

    protected $fillable = ['cycle_name'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}

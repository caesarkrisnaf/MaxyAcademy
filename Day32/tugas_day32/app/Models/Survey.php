<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = ['survey_data'];

    protected $casts = [
        'survey_data' => 'array', // Casting survey_data menjadi array
    ];
}

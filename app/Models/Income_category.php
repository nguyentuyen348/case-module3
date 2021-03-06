<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income_category extends Model
{
    protected $table = 'income_categories';
    use HasFactory;

    function income()
    {
        return $this->belongsTo(Income::class);
    }
}

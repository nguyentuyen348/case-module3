<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost_category extends Model
{
    protected $table = 'cost_categories';
    use HasFactory;

    public function cost()
    {
        return $this->belongsTo(Cost::class);
    }
}

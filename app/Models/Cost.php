<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    public function cost_category()
    {
        return $this->belongsTo(Cost_category::class);
    }
    function checkCategoryId($id)
    {
        if ($this->cost_category_id == $id) {
            return true;
        }
        return false;
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}

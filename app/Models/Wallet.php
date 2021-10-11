<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    public function wallet_category()
    {
        return $this->belongsTo(Wallet_category::class);;
    }

    public function cost()
    {
        return $this->hasMany(Cost::class);
    }

    public function income()
    {
        return $this->hasMany(Income::class);
    }


    public function checkCategoryId($id)
    {
        if ($this->cost_category_id == $id) {
            return true;
        }
        return false;
    }
}

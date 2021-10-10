<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    
    function income_category(){
        return $this->belongsTo(Income_category::class);
    }


    function checkCategoryId($id)
    {
        if ($this->income_category_id == $id) {
            return true;
        }
        return false;
    }
}

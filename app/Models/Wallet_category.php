<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet_category extends Model
{
    protected $table='wallet_categories';
    use HasFactory;

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}

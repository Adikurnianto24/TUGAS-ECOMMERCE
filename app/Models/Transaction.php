<?php

namespace App\Models;
use App\Traits\PriceFormatTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use PriceFormatTrait;
    public function order(){
        return $this->belongsTo(Order::class);
    }
}

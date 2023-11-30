<?php

namespace App\Models;
use App\Traits\PriceFormatTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    use PriceFormatTrait;
    protected $fillable = ['status'];


    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'discount')->withTimestamps();
    }
}

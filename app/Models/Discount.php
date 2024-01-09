<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discount';
    protected $fillable = ['start','end','count','discount','delivery'];

    public function skidka()
    {
        return $this->hasManyThrough(Shop::class,'discount_shop','discount_id','shop_id');
    }
}

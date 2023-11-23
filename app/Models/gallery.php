<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    protected $table = 'gallery';
    protected $fillable = ['image'];
    public function razdels()
    {
        return $this->belongsToMany(razdel::class, 'gallery_razdel', 'gallery_id', 'razdel_id');
        /*return $this->belongsToMany(razdel::class);*/
    }
}

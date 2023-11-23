<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class razdel extends Model
{
    use HasFactory;
    protected $table = 'razdel';
    protected $fillable = ['name'];
    public function gallerys()
    {
        return $this->belongsToMany(gallery::class, 'gallery_razdel', 'razdel_id', 'gallery_id');
    }
    public function yabida()
    {
     return $this->hasManyThrough(gallery::class, razdel::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery_razdel extends Model
{
    use HasFactory;
    protected $table = 'gallery_razdel';
    protected $fillable = ['gallery_id', 'razdel_id'];
}

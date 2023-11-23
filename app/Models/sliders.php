<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'body', 'created_at', 'head', 'support', 'buttons', 'mama'];

    protected $table = 'slider';
}

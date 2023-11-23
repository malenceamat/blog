<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'body', 'head', 'support', 'buttons', 'mama'];

    protected $table = 'slider';


}

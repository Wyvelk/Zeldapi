<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'species', 'type', 'color', 'description', 'img_url', "loots", "biome"
    ];
    public $timestamps = false;
}

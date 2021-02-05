<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class googleMaps extends Model
{
    use HasFactory;
    protected $table = 'google_maps';
    protected $fillable = ['types','name', 'vicinity'];
}

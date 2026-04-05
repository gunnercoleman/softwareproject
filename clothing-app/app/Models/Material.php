<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'environmental_impact',
        'description',
        'image',
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}

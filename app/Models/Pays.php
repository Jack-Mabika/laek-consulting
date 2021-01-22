<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function villes()
    {
        return $this->hasMany(Ville::class, 'pays_id', 'id');
    }
}

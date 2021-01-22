<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];


    public function pays()
    {
        return $this->belongsTo(Pays::class, 'pays_id', 'id');
    }
}

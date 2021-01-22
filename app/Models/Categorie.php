<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];


    public function modules()
    {
        return $this->hasMany(ModuleFormation::class, 'categories_id', 'id');
    }

}

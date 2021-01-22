<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapitreModule extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function module()
    {
        return $this->belongsTo(ModuleFormation::class, 'module_formations_id', 'id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'chapitre_modules_id', 'id');
    }

    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function chapitre()
    {
        return $this->belongsTo(ChapitreModule::class, 'chapitre_modules_id', 'id');
    }
}

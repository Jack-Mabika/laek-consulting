<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleFormation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categories_id', 'id');
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'module_formations_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function devise()
    {
        return $this->belongsTo(Devise::class, 'devises_id', 'id');
    }

    public function achats()
    {
        return $this->hasMany(ModuleAchat::class, 'module_formations_id', 'id');
    }

}

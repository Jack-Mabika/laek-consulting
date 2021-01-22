<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;
    protected $guared = [];

    public function student()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function module()
    {
        return $this->belongsTo(ModuleFormation::class, 'module_formations_id', 'id');
    }
}

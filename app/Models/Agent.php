<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $table = 'agents'; 

    public function division()
    {
        return $this->belongsTo(Division::class, 'Imat', 'Imat');
    }

    public function entrer()
    {
        return $this->hasMany(Entrer::class, 'Im', 'Im');
    }
}

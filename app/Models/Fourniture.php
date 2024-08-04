<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourniture extends Model
{
    use HasFactory;
    protected $fillable = [
        'CodeF',
        'Designation',
        'Qte_initiale',
    ];
    protected $table = 'fournitures';

    public function entrer()
    {
        return $this->hasMany(Entrer::class, 'CodeF', 'CodeF');
    }
}

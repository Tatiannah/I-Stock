<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrer extends Model
{
    use HasFactory;
    protected $table = 'entrers';
    protected $fillable = [
        'CodeF',
        'Im',
        'num_entree',
        'date_entree',
        'qte_entree',
    ];

    public function fourniture()
    {
        return $this->belongsTo(Fourniture::class, 'CodeF', 'CodeF');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'Im', 'Im');
    }
}

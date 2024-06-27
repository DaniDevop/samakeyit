<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Demandeur extends Model
{
    use HasFactory;


    public function demandeActeNaissance():HasMany {

        return $this->hasMany(DemandeActeNaissance::class);
    }
}

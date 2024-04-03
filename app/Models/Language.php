<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable = ['language'];

    public function Vocabularies(){
        return $this->hasMany(Vocabulary::class, 'language', 'id');
    }

    public function Patterns(){
        return $this->hasMany(Pattern::class, 'language', 'id');
    }
}

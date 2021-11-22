<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phrase extends Model
{
    use HasFactory;
    
    private $protected = [];


    public function getRandomPhrase() {
        return 'Random Phrase';
    }
}

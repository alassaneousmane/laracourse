<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails'; // Laravel peut en effet deviner le nom de la table tout seul, cette ligne est facultative

    public $timestamps = false;
}

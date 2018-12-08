<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'nimi',
        'isikukood',
        'synniaasta_ja_kuupaev'
      ];
    
}

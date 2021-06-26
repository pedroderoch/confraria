<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associado extends Model
{
  protected $fillable = [
      'nome','categoria','registro','adiplente','admissao','conselheiro', 'email', 'whatsapp' 
  ];
}


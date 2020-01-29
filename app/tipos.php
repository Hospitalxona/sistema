<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
  protected $primaryKey = 'id_tipo';
   
   protected $fillable=['id_tipo','Descripcion','activo'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
protected $primaryKey = 'id_estado';
   
   protected $fillable=['id_estado','nombre'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
	
   use SoftDeletes;
   protected $primaryKey = 'id_usuario';
   
   protected $fillable=['id_usuario','clues','correo','area','user','password','fotoperfil','id_unidad','id_trabajador'];
						 
  protected $date=['deleted_at']; 
}

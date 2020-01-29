<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidades extends Model
{
    protected $primaryKey = 'id_unidad';
   
   protected $fillable=['id_unidad','clues','nom_unidad',
						'tipo_institucion','jurisdiccion',
						'nom_jurisdiccion','nom_localidad',
						'tipo_unidad','tipologia','tipo_subtipologia',
						'num_consultorios','num_camas','num_quirofanos','calle',
						'estatus','cp','id_responsable','id_municipio'];
}

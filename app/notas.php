<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class notas extends Model
{
use SoftDeletes;
   protected $primaryKey = 'Id_Notas';
   
   protected $fillable=['Id_Notas','hoja','de','Numero_Expediente','Nombre','Apellido_P','Apellido_M',
			'Edad','Genero',
			'T_A','Temp','Frec_C','Frec_R','Peso','Talla',
			'Fecha_Elaboracion1','Hora_Elaboracion1','Nota1',
			'Fecha_Elaboracion2','Hora_Elaboracion2','Nota2',
			'Fecha_Elaboracion3','Hora_Elaboracion3','Nota3',
			'Fecha_Elaboracion4','Hora_Elaboracion4','Nota4',
			'Fecha_Elaboracion5','Hora_Elaboracion5','Nota5',
			'Fecha_Elaboracion6','Hora_Elaboracion6','Nota6',
			'Fecha_Elaboracion7','Hora_Elaboracion7','Nota7',
			'Fecha_Elaboracion8','Hora_Elaboracion8','Nota8',
			'Fecha_Elaboracion9','Hora_Elaboracion9','Nota9',
			'Fecha_Elaboracion10','Hora_Elaboracion10','Nota10',
			'Fecha_Elaboracion11','Hora_Elaboracion11','Nota11',
			'Fecha_Elaboracion12','Hora_Elaboracion12','Nota12',
			'Fecha_Elaboracion13','Hora_Elaboracion13','Nota13',
			'Fecha_Elaboracion14','Hora_Elaboracion14','Nota14',
			'Fecha_Elaboracion15','Hora_Elaboracion15','Nota15',
			'Fecha_Elaboracion16','Hora_Elaboracion16','Nota16',
			'Fecha_Elaboracion17','Hora_Elaboracion17','Nota17',
			'Fecha_Elaboracion18','Hora_Elaboracion18','Nota18',
			'Fecha_Elaboracion19','Hora_Elaboracion19','Nota19',
			'Fecha_Elaboracion20','Hora_Elaboracion20','Nota20',
			'Fecha_Elaboracion21','Hora_Elaboracion21','Nota21',
			'Fecha_Elaboracion22','Hora_Elaboracion22','Nota22',
			'Fecha_Elaboracion23','Hora_Elaboracion23','Nota23',
			'Fecha_Elaboracion24','Hora_Elaboracion24','Nota24',
			'Fecha_Elaboracion25','Hora_Elaboracion25','Nota25',
			'Fecha_Elaboracion26','Hora_Elaboracion26','Nota26',
			'Fecha_Elaboracion27','Hora_Elaboracion27','Nota27',
			'Fecha_Elaboracion28','Hora_Elaboracion28','Nota28',
			'Fecha_Elaboracion29','Hora_Elaboracion29','Nota29',
		    'Fecha_Elaboracion30','Hora_Elaboracion30','Nota30',
			'Fecha_Elaboracion31','Hora_Elaboracion31','Nota31',
			'Fecha_Elaboracion32','Hora_Elaboracion32','Nota32',
			'Fecha_Elaboracion33','Hora_Elaboracion33','Nota33',
			'Fecha_Elaboracion34','Hora_Elaboracion34','Nota34',
			'Fecha_Elaboracion35','Hora_Elaboracion35','Nota35',
			'Fecha_Elaboracion36','Hora_Elaboracion36','Nota36',
			'Fecha_Elaboracion37','Hora_Elaboracion37','Nota37',
			'T_A2','Temp2','Frec_C2','Frec_R2','Peso2','Talla2'];
						 
  protected $date=['deleted_at']; 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class consultas_urgencias extends Model
{
    use SoftDeletes;
   protected $primaryKey = 'Id_ConsultaUrgencia';
     protected $fillable=['Id_ConsultaUrgencia','Fecha_Elaboracion','Hora_Elaboracion',
	         'Tipo_Interrogatorio','Nombre','Apellido_P','Apellido_M',
	        'Edo_civil','Genero','fechan','Ocupacion','Lugar_trabajo','Procedencia','Lugar_accidente',
	        'Nombre_Tutor','Parentesco_Tutor',
	        'tvia','via','ta','na','nint','n_ext','cp','loc','mun','edo',
			'tel','Antecedentes_RU','Padecimiento_A',
			'T_A','Temp','Frec_C','Frec_R','Peso','Talla','Exploracion_fisica',
			'Resultados_lab','Diagnostico_pre','Tratamiento_realizado','Urgencia_calificada',
			'Caso_Medico','Notificacion_ministerio','Fila1','Fila2','Fila3','Destino',
			'Id_expediente','Id_unidad','Id_trabajador'];

    protected $date=['deleted_at']; 
}

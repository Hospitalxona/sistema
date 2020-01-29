<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class historias_clinicas extends Model
{
    use SoftDeletes;
   protected $primaryKey = 'Id_HistoriaClinica';
   
   protected $fillable=['Id_HistoriaClinica','Fecha_Elaboracion','Hora_Elaboracion','Tipo_Interrogatorio','Nombre','Apellido_P','Apellido_M','Edad',
			'Genero','fechan','Ocupacion','tvia','via','ta','na','nint','n_ext','cp','loc','mun','edo',
			'tel','Nombre_Tutor','Parentesco_Tutor','Telefono_Tutor','Antecedentes_H',
			'Antecedentes_PnoP','Antecedentes_PP','Antecedentes_G','Padecimiento_Actual','Cardiovascular','Respiratorio',
			'Gastrointestinal','Geniuritario','Hematico_Linfatico','Endocrino','Nervioso','Musculoesqueletico','Piel_Mucosas_Anexos',
			'T_A','Temp','Frec_C','Frec_R','Peso','Talla','Habitus','Cabeza','Cuello','Torax','Abdomen','Genitales','Extremidades',
			'Piel','Resultados_Previos','Problemas_Clinicos','Tx_Farmacologico','Terapeutica_Empleada',
			'Terapeutica_Actual','Pronostico','Id_expediente','Id_unidad','Id_trabajador'];
						 
  protected $date=['deleted_at']; 
}

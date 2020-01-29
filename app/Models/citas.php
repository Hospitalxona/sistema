<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class citas extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'id';
    protected $fillable=['id','id_expediente','fecha','hora','area_med','num_consul','doctor', 'asistencia'];
	protected $date=['deleted_at'];
}

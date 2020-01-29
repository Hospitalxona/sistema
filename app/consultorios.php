<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class consultorios extends Model
{
	use SoftDeletes;
	protected $primaryKey = 'id_consul';
	protected $fillable=['id_consul','num_consul','id_doc'];
	protected $date=['deleted_at'];
}

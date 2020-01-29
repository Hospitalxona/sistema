<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class minventarios extends Model
{
   
   protected $table = 'minventarios';
   protected $fillable=['id',
   						'medi_mat',
   						'medicamento',
                        'name',
                        'created_at', 'updated_at'];		 
  protected $date=['deleted_at'];

   /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo('App\Models\Estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rolItems()
    {
        return $this->hasMany('App\Models\RolItem');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersRols()
    {
        return $this->hasMany('App\Models\UsersRol');
    }
}

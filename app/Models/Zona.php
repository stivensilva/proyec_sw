<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zona
 *
 * @property $id_zona
 * @property $descripcion_zona
 * @property $updated_at
 * @property $created_at
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Zona extends Model
{
    
    static $rules = [
		// 'id_zona' => 'required',
		'descripcion_zona' => 'required',
    ];
    protected $primaryKey = 'id_zona';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_zona','descripcion_zona'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'id_zona', 'id_zona');
    }
    

}

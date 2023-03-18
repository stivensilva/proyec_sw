<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Listagenero
 *
 * @property $id_genero
 * @property $descripcion_genero
 * @property $sw_activo
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Listagenero extends Model
{
    
    static $rules = [
		'id_genero' => 'required',
		'descripcion_genero' => 'required',
		'sw_activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_genero','descripcion_genero','sw_activo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'id_genero', 'id_genero');
    }
    

}

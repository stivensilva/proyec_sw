<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Listacliente
 *
 * @property $id_tipo_cliente
 * @property $descripcion_cliente
 *
 * @property Cliente[] $clientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Listacliente extends Model
{
    
    static $rules = [
		'id_tipo_cliente' => 'required',
		'descripcion_cliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_cliente','descripcion_cliente'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'tipo_cliente', 'id_tipo_cliente');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id_cliente
 * @property $id_contrato
 * @property $descripcion
 * @property $numero_contrato
 * @property $fecha_ini
 * @property $fecha_fin
 * @property $fecha_registro
 * @property $id_usuario
 * @property $contacto_contrato
 * @property $credito_dias_cartera
 * @property $lista_precio
 * @property $id_tipo_contrato
 * @property $sw_paragrafados
 * @property $estado
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
		'id_contrato' => 'required',
		'descripcion' => 'required',
		'numero_contrato' => 'required',
		'fecha_ini' => 'required',
		'fecha_fin' => 'required',
		'fecha_registro' => 'required',
		'id_usuario' => 'required',
		'contacto_contrato' => 'required',
		'credito_dias_cartera' => 'required',
		'lista_precio' => 'required',
		'id_tipo_contrato' => 'required',
		'sw_paragrafados' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_contrato','descripcion','numero_contrato','fecha_ini','fecha_fin','fecha_registro','id_usuario','contacto_contrato','credito_dias_cartera','lista_precio','id_tipo_contrato','sw_paragrafados','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id_cliente', 'id_cliente');
    }
    

}

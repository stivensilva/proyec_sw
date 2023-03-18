<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id_cliente
 * @property $tipo_cliente
 * @property $tipo_id_cliente
 * @property $documento_id
 * @property $digito_verificacion
 * @property $primer_nombre
 * @property $segundo_nombre
 * @property $primer_apellido
 * @property $segundo_apellido
 * @property $nombre_corto
 * @property $nombre_juridico
 * @property $fecha_nacimiento
 * @property $id_genero
 * @property $dirección_1
 * @property $dirección_2
 * @property $teléfono_1
 * @property $teléfono_2
 * @property $celular_1
 * @property $celular_2
 * @property $email_1
 * @property $email_2
 * @property $id_pais
 * @property $id_departamento
 * @property $id_municipio
 * @property $id_zona
 * @property $resposable_iva
 * @property $reteica
 * @property $autoretenedor_fuente
 * @property $proveedor_sw
 * @property $fecha_registro
 * @property $usuario_registra
 * @property $estado
 *
 * @property Contrato[] $contratos
 * @property Departamento $departamento
 * @property Listacliente $listacliente
 * @property Listagenero $listagenero
 * @property Municipio $municipio
 * @property Paise $paise
 * @property Zona $zona
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'id_cliente' => 'required',
		'tipo_cliente' => 'required',
		'tipo_id_cliente' => 'required',
		'documento_id' => 'required',
		'digito_verificacion' => 'required',
		'primer_nombre' => 'required',
		'primer_apellido' => 'required',
		'fecha_nacimiento' => 'required',
		'dirección_1' => 'required',
		'teléfono_1' => 'required',
		'celular_1' => 'required',
		'email_1' => 'required',
		'id_pais' => 'required',
		'id_departamento' => 'required',
		'id_municipio' => 'required',
		'id_zona' => 'required',
		'resposable_iva' => 'required',
		'reteica' => 'required',
		'autoretenedor_fuente' => 'required',
		'proveedor_sw' => 'required',
		'fecha_registro' => 'required',
		'usuario_registra' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','tipo_cliente','tipo_id_cliente','documento_id','digito_verificacion','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','nombre_corto','nombre_juridico','fecha_nacimiento','id_genero','dirección_1','dirección_2','teléfono_1','teléfono_2','celular_1','celular_2','email_1','email_2','id_pais','id_departamento','id_municipio','id_zona','resposable_iva','reteica','autoretenedor_fuente','proveedor_sw','fecha_registro','usuario_registra','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany('App\Models\Contrato', 'id_cliente', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id_departamento', 'id_departamento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function listacliente()
    {
        return $this->hasOne('App\Models\Listacliente', 'id_tipo_cliente', 'tipo_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function listagenero()
    {
        return $this->hasOne('App\Models\Listagenero', 'id_genero', 'id_genero');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function municipio()
    {
        return $this->hasOne('App\Models\Municipio', 'id_municipio', 'id_municipio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'id_pais', 'id_pais');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function zona()
    {
        return $this->hasOne('App\Models\Zona', 'id_zona', 'id_zona');
    }
    

}

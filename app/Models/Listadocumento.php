<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Listadocumento
 *
 * @property $id_tipo_documento
 * @property $descripcion
 * @property $alterno
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Listadocumento extends Model
{
    
    static $rules = [
		'id_tipo_documento' => 'required',
		'descripcion' => 'required',
		'alterno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo_documento','descripcion','alterno'];



}

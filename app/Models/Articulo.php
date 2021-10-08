<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Articulo
 *
 * @property $id
 * @property $codigo
 * @property $marca
 * @property $modelo
 * @property $tipo
 * @property $imagen
 * @property $precio
 * @property $talla
 * @property $disponibilidad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Articulo extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'tipo' => 'required',
		'imagen' => 'required',
		'precio' => 'required',
		'talla' => 'required',
		'disponibilidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','marca','modelo','tipo','imagen','precio','talla','disponibilidad'];



}

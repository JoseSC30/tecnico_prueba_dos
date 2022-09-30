<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Router
 *
 * @property $id
 * @property $codigo
 * @property $marca
 * @property $modelo
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Router extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','marca','modelo','descripcion'];



}

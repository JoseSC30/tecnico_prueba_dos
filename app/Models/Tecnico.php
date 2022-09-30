<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tecnico
 *
 * @property $id
 * @property $nombre
 * @property $ci
 * @property $direccion
 * @property $fnacimiento
 * @property $finicio
 * @property $sexo
 * @property $cargo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tecnico extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ci' => 'required',
		'direccion' => 'required',
		'fnacimiento' => 'required',
		'finicio' => 'required',
		'sexo' => 'required',
		'cargo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ci','direccion','fnacimiento','finicio','sexo','cargo'];



}

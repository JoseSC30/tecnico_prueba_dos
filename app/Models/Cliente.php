<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombre
 * @property $ci
 * @property $direccion
 * @property $fnacimiento
 * @property $sexo
 * @property $telefono
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ci' => 'required',
		'direccion' => 'required',
		'fnacimiento' => 'required',
		'sexo' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ci','direccion','fnacimiento','sexo','telefono','correo'];



}

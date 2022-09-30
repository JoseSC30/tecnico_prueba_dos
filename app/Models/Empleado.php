<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $user_id
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
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
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


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function users()
    {
      return $this->hasMany('App\Models\users','empleado_id','id');
    }
    

}

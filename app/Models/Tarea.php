<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $descripcion
 * @property $fecha_inicio
 * @property $hora_estimada
 * @property $empleado_id
 * @property $finalizada
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'fecha_inicio' => 'required',
		'hora_estimada' => 'required',
		'empleado_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','fecha_inicio','hora_estimada','empleado_id','finalizada'];

//**Asignacion de relación en el modelo

/** 
 * * @return \Illuminate\Database\Eloquent\Relations\HasOne
*/
public function empleado(){
  return $this->hasOne('App\Models\Empleado','id','empleado_id');
}

protected $casts = [
  'fecha_inicio'  => 'datetime:Y-m-d\TH:i'
];

}

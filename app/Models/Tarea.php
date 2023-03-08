<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $Descripcion
 * @property $fecha de inicio
 * @property $Horas estimadas
 * @property $empleado_id
 * @property $finalizado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarea extends Model
{
    
    static $rules = [
		'Descripcion' => 'required',
		'fecha de inicio' => 'required',
		'Horas estimadas' => 'required',
		'empleado_id' => 'required',
		'finalizado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','fecha de inicio','Horas estimadas','empleado_id','finalizado'];



}

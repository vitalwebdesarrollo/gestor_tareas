<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarea
 *
 * @property $id
 * @property $descripcion
 * @property $description
 * @property $fecha de inicio
 * @property $hora estimada
 * @property $categoria_id
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
		'descripcion' => 'required',
		'description' => 'required',
		'fecha de inicio' => 'required',
		'hora estimada' => 'required',
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','description','fecha de inicio','hora estimada','categoria_id','finalizado'];



}

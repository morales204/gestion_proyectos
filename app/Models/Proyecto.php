<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id_proyecto
 * @property $nombre_proyecto
 * @property $inicio_proyecto
 * @property $fin_proyecto
 * @property $descripcion_proyecto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    // Define la tabla si el nombre no es plural del modelo
    protected $table = 'proyectos';

    // Establece la clave primaria
    protected $primaryKey = 'id_proyecto';
    
        // Indica que la clave primaria es auto-incremental
    public $incrementing = true;
    
    protected $perPage = 20;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_proyecto', 'inicio_proyecto', 'fin_proyecto', 'descripcion_proyecto'];


}

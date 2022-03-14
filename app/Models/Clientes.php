<?php

namespace App\Models;

/* use Eloquent as Model; */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



/**
 * Class Clientes
 * @package App\Models
 * @version March 9, 2022, 5:53 am UTC
 *
 * @property string $fechaNac
 * @property string $email
 * @property integer $telefono
 * @property integer $telefonoAlt
 * @property string $nombres
 * @property string $apellido1
 * @property string $apellido2
 * @property string $sexo
 * @property boolean $estado
 */
class Clientes extends Model
{
    use HasFactory;

    public $table = 'clientes';
    



    public $fillable = [
        'fechaNac',
        'email',
        'telefono',
        'telefonoAlt',
        'nombres',
        'apellido1',
        'apellido2',
        'sexo',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fechaNac' => 'date',
        'email' => 'string',
        'telefono' => 'integer',
        'telefonoAlt' => 'integer',
        'nombres' => 'string',
        'apellido1' => 'string',
        'apellido2' => 'string',
        'sexo' => 'string',
        'estado' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

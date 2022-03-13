<?php

namespace App\Models;

/* use Eloquent as Model; */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TipoProducto
 * @package App\Models
 * @version March 13, 2022, 8:16 pm UTC
 *
 * @property string $nombre
 * @property number $saldo
 * @property number $montoTotal
 * @property string $plazo
 * @property number $tasaIntereses
 * @property string $descripcion
 */
class TipoProducto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tipo_producto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'saldo',
        'montoTotal',
        'plazo',
        'tasaIntereses',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'saldo' => 'decimal:2',
        'montoTotal' => 'decimal:2',
        'plazo' => 'date',
        'tasaIntereses' => 'decimal:2',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'nullable|string|max:255',
        'saldo' => 'nullable|numeric',
        'montoTotal' => 'nullable|numeric',
        'plazo' => 'nullable',
        'tasaIntereses' => 'nullable|numeric',
        'descripcion' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}

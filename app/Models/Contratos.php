<?php

namespace App\Models;

/* use Eloquent as Model; */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Contratos
 * @package App\Models
 * @version March 14, 2022, 12:40 am UTC
 *
 * @property \App\Models\Cliente $idcliente
 * @property \App\Models\Producto $idproducto
 * @property \App\Models\User $usuario
 * @property string $descripcion
 * @property integer $idCliente
 * @property integer $usuario
 * @property integer $idProducto
 */
class Contratos extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'contratos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'idCliente',
        'usuario',
        'idProducto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'idCliente' => 'integer',
        'usuario' => 'integer',
        'idProducto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'idCliente' => 'nullable|integer',
        'usuario' => 'nullable|integer',
        'idProducto' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idCliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproducto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idProducto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario');
    }
}

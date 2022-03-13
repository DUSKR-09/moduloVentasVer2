<?php

namespace App\Models;

/* use Eloquent as Model; */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProcessingSession
 * @package App\Models
 * @version March 13, 2022, 2:55 am UTC
 *
 * @property \App\Models\Cliente $idcliente
 * @property string|\Carbon\Carbon $fechaTentativa
 * @property string|\Carbon\Carbon $fechaContacto
 * @property integer $usuario
 * @property string $descripAcuerdo
 * @property integer $idCliente
 */
class ProcessingSession extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ofertas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fechaTentativa',
        'fechaContacto',
        'usuario',
        'descripAcuerdo',
        'idCliente'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fechaTentativa' => 'datetime',
        'fechaContacto' => 'datetime',
        'usuario' => 'integer',
        'descripAcuerdo' => 'string',
        'idCliente' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fechaTentativa' => 'nullable',
        'fechaContacto' => 'nullable',
        'usuario' => 'required|integer',
        'descripAcuerdo' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'idCliente' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idCliente');
    }

    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario');
    }
}

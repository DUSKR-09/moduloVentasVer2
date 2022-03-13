<?php

namespace App\Models;

/* use Eloquent as Model; */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Producto
 * @package App\Models
 * @version March 13, 2022, 8:36 pm UTC
 *
 * @property \App\Models\TipoProducto $tipoprod
 * @property string $descripcion
 * @property integer $tipoProd
 */
class Producto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'producto';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descripcion',
        'tipoProd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string',
        'tipoProd' => 'integer'
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
        'tipoProd' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoprod()
    {
        return $this->belongsTo(\App\Models\TipoProducto::class, 'tipoProd');
    }
}

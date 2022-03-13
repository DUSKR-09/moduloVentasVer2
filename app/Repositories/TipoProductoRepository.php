<?php

namespace App\Repositories;

use App\Models\TipoProducto;
use App\Repositories\BaseRepository;

/**
 * Class TipoProductoRepository
 * @package App\Repositories
 * @version March 13, 2022, 8:16 pm UTC
*/

class TipoProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'saldo',
        'montoTotal',
        'plazo',
        'tasaIntereses',
        'descripcion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoProducto::class;
    }
}

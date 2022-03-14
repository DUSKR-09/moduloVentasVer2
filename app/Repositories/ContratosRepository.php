<?php

namespace App\Repositories;

use App\Models\Contratos;
use App\Repositories\BaseRepository;

/**
 * Class ContratosRepository
 * @package App\Repositories
 * @version March 14, 2022, 12:40 am UTC
*/

class ContratosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'idCliente',
        'usuario',
        'idProducto'
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
        return Contratos::class;
    }
}

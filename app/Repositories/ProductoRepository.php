<?php

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version March 13, 2022, 8:36 pm UTC
*/

class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion',
        'tipoProd'
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
        return Producto::class;
    }
}

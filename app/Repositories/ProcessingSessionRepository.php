<?php

namespace App\Repositories;

use App\Models\ProcessingSession;
use App\Repositories\BaseRepository;

/**
 * Class ProcessingSessionRepository
 * @package App\Repositories
 * @version March 13, 2022, 2:55 am UTC
*/

class ProcessingSessionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fechaTentativa',
        'fechaContacto',
        'usuario',
        'descripAcuerdo',
        'idCliente'
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
        return ProcessingSession::class;
    }
}

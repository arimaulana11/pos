<?php

namespace App\Repositories;

use App\Models\role;
use App\Repositories\BaseRepository;

/**
 * Class roleRepository
 * @package App\Repositories
 * @version July 9, 2020, 11:23 am UTC
*/

class roleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_company',
        'name'
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
        return role::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\company;
use App\Repositories\BaseRepository;

/**
 * Class companyRepository
 * @package App\Repositories
 * @version July 9, 2020, 11:21 am UTC
*/

class companyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'no_telp',
        'alamat',
        'expired'
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
        return company::class;
    }
}

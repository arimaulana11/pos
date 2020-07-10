<?php

namespace App\Repositories;

use App\Models\menu;
use App\Repositories\BaseRepository;

/**
 * Class menuRepository
 * @package App\Repositories
 * @version July 9, 2020, 11:21 am UTC
*/

class menuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'perent_id',
        'name',
        'link',
        'id_company'
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
        return menu::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\role_detail;
use App\Repositories\BaseRepository;

/**
 * Class role_detailRepository
 * @package App\Repositories
 * @version July 9, 2020, 11:23 am UTC
*/

class role_detailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_menu',
        'id_role',
        'id_company',
        'action'
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
        return role_detail::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\role_detail;
use App\Repositories\BaseRepository;

/**
 * Class role_detailRepository
 * @package App\Repositories
 * @version October 16, 2020, 12:47 am UTC
*/

class role_detailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_menu',
        'id_role',
        'read',
        'create',
        'edit',
        'delete'
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

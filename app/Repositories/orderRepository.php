<?php

namespace App\Repositories;

use App\Models\order;
use App\Repositories\BaseRepository;

/**
 * Class orderRepository
 * @package App\Repositories
 * @version July 9, 2020, 11:22 am UTC
*/

class orderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_user',
        'tanggal',
        'id_company',
        'total_harga',
        'total_qty'
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
        return order::class;
    }
}

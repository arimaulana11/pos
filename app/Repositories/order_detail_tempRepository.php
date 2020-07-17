<?php

namespace App\Repositories;

use App\Models\order_detail_temp;
use App\Repositories\BaseRepository;

/**
 * Class order_detail_tempRepository
 * @package App\Repositories
 * @version July 17, 2020, 2:55 am UTC
*/

class order_detail_tempRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_order',
        'id_barang',
        'qty'
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
        return order_detail_temp::class;
    }
}

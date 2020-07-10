<?php

namespace App\Repositories;

use App\Models\order_detail;
use App\Repositories\BaseRepository;

/**
 * Class order_detailRepository
 * @package App\Repositories
 * @version July 9, 2020, 11:22 am UTC
*/

class order_detailRepository extends BaseRepository
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
        return order_detail::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\order_temp;
use App\Repositories\BaseRepository;

/**
 * Class order_tempRepository
 * @package App\Repositories
 * @version July 17, 2020, 2:54 am UTC
*/

class order_tempRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_company',
        'id_user',
        'payment_code',
        'tanggal',
        'subtotal',
        'grand_total',
        'discount',
        'cash',
        'change',
        'note'
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
        return order_temp::class;
    }
}

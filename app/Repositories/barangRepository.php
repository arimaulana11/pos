<?php

namespace App\Repositories;

use App\Models\barang;
use App\Repositories\BaseRepository;

/**
 * Class barangRepository
 * @package App\Repositories
 * @version July 9, 2020, 11:28 am UTC
*/

class barangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_company',
        'nama',
        'harga',
        'stok',
        'code',
        'category'
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
        return barang::class;
    }
}

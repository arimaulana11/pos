<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class order_detail_temp
 * @package App\Models
 * @version July 17, 2020, 2:55 am UTC
 *
 * @property integer $id_order
 * @property integer $id_barang
 * @property integer $qty
 */
class order_detail_temp extends Model
{
    use SoftDeletes;

    public $table = 'order_detail_temps';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_order',
        'id_barang',
        'qty'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_order' => 'integer',
        'id_barang' => 'integer',
        'qty' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_order' => 'required',
        'id_barang' => 'required',
        'qty' => 'required'
    ];

    
}

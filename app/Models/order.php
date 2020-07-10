<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class order
 * @package App\Models
 * @version July 9, 2020, 11:22 am UTC
 *
 * @property integer $id_user
 * @property string $tanggal
 * @property integer $id_company
 * @property integer $total_harga
 * @property integer $total_qty
 */
class order extends Model
{
    use SoftDeletes;

    public $table = 'orders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_user',
        'tanggal',
        'id_company',
        'total_harga',
        'total_qty'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_user' => 'integer',
        'tanggal' => 'date',
        'id_company' => 'integer',
        'total_harga' => 'integer',
        'total_qty' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_user' => 'required',
        'tanggal' => 'required',
        'id_company' => 'required'
    ];

    
}

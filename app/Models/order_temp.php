<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class order_temp
 * @package App\Models
 * @version July 17, 2020, 2:54 am UTC
 *
 * @property integer $id_company
 * @property integer $id_user
 * @property string $payment_code
 * @property string $tanggal
 * @property integer $subtotal
 * @property integer $grand_total
 * @property integer $discount
 * @property integer $cash
 * @property integer $change
 * @property string $note
 */
class order_temp extends Model
{
    use SoftDeletes;

    public $table = 'order_temps';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_company' => 'integer',
        'id_user' => 'integer',
        'payment_code' => 'string',
        'tanggal' => 'date',
        'subtotal' => 'integer',
        'grand_total' => 'integer',
        'discount' => 'integer',
        'cash' => 'integer',
        'change' => 'integer',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_company' => 'required',
        'id_user' => 'required',
        'payment_code' => 'required',
        'tanggal' => 'required'
    ];

    
}

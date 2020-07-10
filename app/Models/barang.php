<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class barang
 * @package App\Models
 * @version July 9, 2020, 11:28 am UTC
 *
 * @property integer $id_company
 * @property string $nama
 * @property integer $harga
 * @property integer $stok
 * @property string $code
 * @property integer $category
 */
class barang extends Model
{
    use SoftDeletes;

    public $table = 'barangs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_company',
        'nama',
        'harga',
        'stok',
        'code',
        'category'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_company' => 'integer',
        'nama' => 'string',
        'harga' => 'integer',
        'stok' => 'integer',
        'code' => 'string',
        'category' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_company' => 'required',
        'nama' => 'required',
        'harga' => 'required',
        'stok' => 'required',
        'code' => 'required',
        'category' => 'required'
    ];

    
}

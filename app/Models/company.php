<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class company
 * @package App\Models
 * @version July 9, 2020, 11:21 am UTC
 *
 * @property string $nama
 * @property string $no_telp
 * @property string $alamat
 * @property string $expired
 */
class company extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'no_telp',
        'alamat',
        'expired'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'no_telp' => 'string',
        'alamat' => 'string',
        'expired' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'no_telp' => 'required',
        'alamat' => 'required',
        'expired' => 'required'
    ];

    
}

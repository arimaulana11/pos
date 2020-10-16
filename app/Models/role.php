<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class role
 * @package App\Models
 * @version October 14, 2020, 8:55 am UTC
 *
 * @property integer $id_user
 * @property string $name
 */
class role extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_user',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_user' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_user' => 'required',
        'name' => 'required'
    ];

    
}

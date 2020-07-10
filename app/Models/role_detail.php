<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class role_detail
 * @package App\Models
 * @version July 9, 2020, 11:23 am UTC
 *
 * @property integer $id_menu
 * @property integer $id_role
 * @property integer $id_company
 * @property string $action
 */
class role_detail extends Model
{
    use SoftDeletes;

    public $table = 'role_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_menu',
        'id_role',
        'id_company',
        'action'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_menu' => 'integer',
        'id_role' => 'integer',
        'id_company' => 'integer',
        'action' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_menu' => 'required',
        'id_role' => 'required',
        'id_company' => 'required',
        'action' => 'required'
    ];

    
}

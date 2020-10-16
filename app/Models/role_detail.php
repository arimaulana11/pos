<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class role_detail
 * @package App\Models
 * @version October 16, 2020, 12:47 am UTC
 *
 * @property integer $id_menu
 * @property integer $id_role
 * @property boolean $read
 * @property boolean $create
 * @property boolean $edit
 * @property boolean $delete
 */
class role_detail extends Model
{
    use SoftDeletes;

    public $table = 'role_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_menu',
        'id_role',
        'read',
        'create',
        'edit',
        'delete'
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
        'read' => 'boolean',
        'create' => 'boolean',
        'edit' => 'boolean',
        'delete' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_menu' => 'required',
        'id_role' => 'required'
    ];

    
}

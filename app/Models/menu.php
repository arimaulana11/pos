<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class menu
 * @package App\Models
 * @version July 9, 2020, 11:21 am UTC
 *
 * @property string $perent_id
 * @property string $name
 * @property string $link
 * @property integer $id_company
 */
class menu extends Model
{
    use SoftDeletes;

    public $table = 'menus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'perent_id',
        'name',
        'link',
        'id_company'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'perent_id' => 'string',
        'name' => 'string',
        'link' => 'string',
        'id_company' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'perent_id' => 'required',
        'name' => 'required',
        'link' => 'required',
        'id_company' => 'required'
    ];

    
}

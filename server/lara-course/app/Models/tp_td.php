<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tp_td
 * @package App\Models
 * @version June 26, 2020, 9:26 pm UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property string title
 * @property integer tp_td
 * @property string file
 */
class tp_td extends Model
{
    use SoftDeletes;

    public $table = 'tp_tds';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'title',
        'tp_td',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'title' => 'string',
        'tp_td' => 'integer',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'file' => 'required'
    ];

    public function Courses()
    {
        return $this->hasMany('App\Models\Course');
    }
    public function Users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    
}

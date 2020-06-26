<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Note
 * @package App\Models
 * @version June 26, 2020, 4:29 pm UTC
 *
 * @property string title
 * @property integer user_id
 * @property integer course_id
 * @property integer category_id
 * @property integer note
 * @property string NB
 */
class Note extends Model
{
    use SoftDeletes;

    public $table = 'notes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'user_id',
        'course_id',
        'category_id',
        'note',
        'NB'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'category_id' => 'integer',
        'note' => 'integer',
        'NB' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        // 'user_id' => 'required',
        'note' => 'required',
        // 'NB' => 'required'
    ];

    public function Courses()
    {
        return $this->hasMany('App\Models\Course');
    }
    public function Users()
    {
        return $this->hasMany('App\Models\User');
    }
    public function Categories()
    {
        return $this->hasMany('App\Models\Category');
    }

    
}

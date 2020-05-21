<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CourseUser
 * @package App\Models
 * @version May 20, 2020, 9:12 pm UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property integer user_account_id
 * @property string|\Carbon\Carbon paid_data
 * @property string|\Carbon\Carbon expiry_date
 * @property string plan
 * @property number paid_amount
 * @property boolean status
 */
class CourseUser extends Model
{
    use SoftDeletes;

    public $table = 'course_user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'user_account_id',
        'paid_data',
        'expiry_date',
        'plan',
        'paid_amount',
        'status'
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
        'user_account_id' => 'integer',
        'paid_data' => 'datetime',
        'expiry_date' => 'datetime',
        'plan' => 'string',
        'paid_amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'course_id' => 'required',
        'user_account_id' => 'required',
        'paid_data' => 'required',
        'expiry_date' => 'required',
        'status' => 'required',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    
}

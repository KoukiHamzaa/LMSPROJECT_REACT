<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Coupon
 * @package App\Models
 * @version June 3, 2020, 5:08 pm UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property integer student_id
 * @property integer category_id
 * @property integer user_account_id
 * @property string available_on_course_page
 * @property string type
 * @property number price
 * @property string status
 * @property string|\Carbon\Carbon deadline
 * @property number count_timer
 * @property integer total_available
 * @property integer total_remaining
 */
class Coupon extends Model
{
    use SoftDeletes;

    public $table = 'coupons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'student_id',
        'category_id',
        'user_account_id',
        'available_on_course_page',
        'type',
        'price',
        'status',
        'deadline',
        'count_timer',
        'total_available',
        'total_remaining'
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
        'student_id' => 'integer',
        'category_id' => 'integer',
        'user_account_id' => 'integer',
        'available_on_course_page' => 'string',
        'type' => 'string',
        'price' => 'float',
        'status' => 'string',
        'deadline' => 'datetime',
        'count_timer' => 'float',
        'total_available' => 'integer',
        'total_remaining' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'course_id' => 'required',
        'student_id' => 'required',
        'available_on_course_page' => 'required',
        'type' => 'required',
        'price' => 'required',
        'status' => 'required',
        'deadline' => 'required',
        'count_timer' => 'required',
        'total_available' => 'required'
    ];

    
}

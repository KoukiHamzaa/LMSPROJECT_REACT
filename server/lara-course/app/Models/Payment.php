<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version May 20, 2020, 9:14 pm UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property integer category_id
 * @property number amount
 * @property string status
 * @property string mode_of_payment
 * @property string payment_processor
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'category_id',
        'amount',
        'status',
        'mode_of_payment',
        'payment_processor'
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
        'category_id' => 'integer',
        'amount' => 'float',
        'status' => 'string',
        'mode_of_payment' => 'string',
        'payment_processor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'amount' => 'required',
        'status' => 'required',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    
}

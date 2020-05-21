<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 * @package App\Models
 * @version May 20, 2020, 9:11 pm UTC
 *
 * @property integer user_id
 * @property integer category_id
 * @property string title
 * @property string description
 * @property string about_instructor
 * @property number discount_price
 * @property number actual_price
 * @property string playlist_url
 * @property integer view_count
 * @property integer subscriber_count
 * @property integer status
 * @property string photo
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'about_instructor',
        'discount_price',
        'actual_price',
        'playlist_url',
        'view_count',
        'subscriber_count',
        'status',
        'photo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'about_instructor' => 'string',
        'discount_price' => 'float',
        'actual_price' => 'float',
        'playlist_url' => 'string',
        'view_count' => 'integer',
        'subscriber_count' => 'integer',
        'status' => 'integer',
        'photo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'category_id' => 'required',
        'title' => 'required',
        'description' => 'required',
        'about_instructor' => 'required',
        'discount_price' => 'required',
        'actual_price' => 'required',
        'playlist_url' => 'required',
        'view_count' => 'required',
        'subscriber_count' => 'required',
        'status' => 'required',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    
}

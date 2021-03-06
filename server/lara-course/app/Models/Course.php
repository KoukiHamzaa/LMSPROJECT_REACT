<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 * @package App\Models
 * @version June 3, 2020, 4:37 pm UTC
 *
 * @property integer user_id
 * @property integer category_id
 * @property string title
 * @property string sub_title
 * @property string description
 * @property string about_instructor
 * @property string playlist_url
 * @property string photo
 * @property string promo_video_url
 * @property string tags
 * @property integer creator_status
 * @property integer admin_status
 * @property string what_will_student_learn
 * @property string target_student
 * @property string requirements
 * @property number discount_price
 * @property number actual_price
 * @property integer view_count
 * @property integer subscriber_count
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
        'sub_title',
        'description',
        'about_instructor',
        'playlist_url',
        'photo',
        'promo_video_url',
        'tags',
        'creator_status',
        'admin_status',
        'what_will_student_learn',
        'target_student',
        'requirements',
        'discount_price',
        'actual_price',
        'view_count',
        'subscriber_count'
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
        'sub_title' => 'string',
        'description' => 'string',
        'about_instructor' => 'string',
        'playlist_url' => 'string',
        'photo' => 'string',
        'promo_video_url' => 'string',
        'tags' => 'string',
        'creator_status' => 'integer',
        'admin_status' => 'integer',
        'what_will_student_learn' => 'string',
        'target_student' => 'string',
        'requirements' => 'string',
        'discount_price' => 'float',
        'actual_price' => 'float',
        'view_count' => 'integer',
        'subscriber_count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */

    public static $rules = [
        // 'user_id' => 'required',
        // 'category_id' => 'required'
        'title' => 'required',
        'sub_title' => 'required',
        'description' => 'required',
        // 'promo_video_url' => 'required',
        'playlist_url' => 'required',
        'creator_status' => 'required',
        'admin_status' => 'required',
        // 'discount_price' => 'required',
        'actual_price' => 'required',
        // 'view_count' => 'required',
        // 'subscriber_count' => 'required'
    ];

/**
* Get the role that owns this users.
*/

public function category()
{
    return $this->belongsTo('App\Models\Category');
}

public function user()
{
    return $this->belongsTo('App\Models\User');
}

public function users()
{
    return $this->belongsToMany('App\Models\User')
        ->withPivot('paid_amount')
        ->withPivot('paid_date')
        ->withPivot('expiry_date')
        ->withPivot('plan')
        ->withPivot('created_at')
        ->withPivot('user_account_id')
        ->withPivot('category_id')
        ;
}

public function comments()
{
    return $this->hasMany('App\Models\Comment');
}

public function items()
{
    return $this->hasMany('App\Models\Item');
}

public function CourseUsers()
{
    return $this->hasMany('App\Models\CourseUser');
}

public function note()
{
    return $this->belongsTo('App\Models\Note');
}

public function tp_td()
{
    return $this->belongsTo('App\Models\tp_td');
}

}

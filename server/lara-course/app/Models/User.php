<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class User
 * @package App\Models
 * @version May 25, 2020, 2:32 pm UTC
 *
 * @property string name
 * @property string first_name
 * @property string last_name
 * @property string gender
 * @property string image
 * @property string paystack_authorization_code
 * @property string paystack_customer_code
 * @property string date_of_birth
 * @property boolean isSubscribed
 * @property string email
 * @property string password
 * @property integer view_count
 * @property integer role_id
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'first_name',
        'last_name',
        'gender',
        'image',
        'paystack_authorization_code',
        'paystack_customer_code',
        'date_of_birth',
        'isSubscribed',
        'email',
        'password',
        'view_count',
        'role_id',
        'remember_token'
    ];
    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'image' => 'string',
        'paystack_authorization_code' => 'string',
        'paystack_customer_code' => 'string',
        'date_of_birth' => 'date',
        'isSubscribed' => 'boolean',
        'email' => 'string',
        'password' => 'string',
        'view_count' => 'integer',
        'role_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        // 'password' => 'required',
        // 'view_count' => 'required',
        // 'role_id' => 'required'
    ];

    public function CourseUsers()
    {
        return $this->hasMany('App\Models\CourseUser');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }

    public function comments()
{
    return $this->hasMany('App\Models\Comment');
}

public function note()
{
    return $this->belongsTo('App\Models\Note');
}

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version May 20, 2020, 11:06 pm UTC
 *
 * @property string name
 * @property string first_name
 * @property string last_name
 * @property string gender
 * @property string date_of_birth
 * @property boolean isSubscribed
 * @property string email
 * @property string password
 * @property integer view_count
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
        'date_of_birth',
        'isSubscribed',
        'email',
        'password',
        'view_count',
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
        'date_of_birth' => 'date',
        'isSubscribed' => 'boolean',
        'email' => 'string',
        'password' => 'string',
        'view_count' => 'integer',
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
        'password' => 'required',
        'view_count' => 'required',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version May 20, 2020, 9:06 pm UTC
 *
 * @property string name
 * @property string description
 * @property string categories_photos
 * @property integer view_count
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'view_count',
        'categories_photos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'categories_photos' => 'string',
        'view_count' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required',
        'categories_photos' => 'required'
        // 'view_count' => 'required',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];
    
    public function note()
    {
        return $this->belongsTo('App\Models\Note');
    }
    
}

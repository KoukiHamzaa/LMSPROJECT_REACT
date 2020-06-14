<?php

namespace App\Repositories;

use App\Models\CourseUser;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CourseUserRepository
 * @package App\Repositories
 * @version June 14, 2020, 2:16 pm UTC
 *
 * @method CourseUser findWithoutFail($id, $columns = ['*'])
 * @method CourseUser find($id, $columns = ['*'])
 * @method CourseUser first($columns = ['*'])
*/
class CourseUserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'category_id',
        'user_account_id',
        'paid_data',
        'expiry_date',
        'plan',
        'paid_amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CourseUser::class;
    }
}

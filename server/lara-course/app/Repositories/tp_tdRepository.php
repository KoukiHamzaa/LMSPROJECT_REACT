<?php

namespace App\Repositories;

use App\Models\tp_td;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tp_tdRepository
 * @package App\Repositories
 * @version June 26, 2020, 9:26 pm UTC
 *
 * @method tp_td findWithoutFail($id, $columns = ['*'])
 * @method tp_td find($id, $columns = ['*'])
 * @method tp_td first($columns = ['*'])
*/
class tp_tdRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'title',
        'tp_td',
        'file'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tp_td::class;
    }
}

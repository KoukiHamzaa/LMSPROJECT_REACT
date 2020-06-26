<?php

namespace App\Repositories;

use App\Models\Note;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NoteRepository
 * @package App\Repositories
 * @version June 26, 2020, 4:29 pm UTC
 *
 * @method Note findWithoutFail($id, $columns = ['*'])
 * @method Note find($id, $columns = ['*'])
 * @method Note first($columns = ['*'])
*/
class NoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'user_id',
        'course_id',
        'category_id',
        'note',
        'NB'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Note::class;
    }
}

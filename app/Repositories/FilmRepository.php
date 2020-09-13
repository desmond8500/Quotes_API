<?php

namespace App\Repositories;

use App\Models\Film;
use App\Repositories\BaseRepository;

/**
 * Class FilmRepository
 * @package App\Repositories
 * @version September 13, 2020, 12:24 am UTC
*/

class FilmRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'cover',
        'description',
        'type',
        'file',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Film::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Citation;
use App\Repositories\BaseRepository;

/**
 * Class CitationRepository
 * @package App\Repositories
 * @version July 2, 2020, 11:20 pm UTC
*/

class CitationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'quote',
        'author',
        'tag'
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
        return Citation::class;
    }
}

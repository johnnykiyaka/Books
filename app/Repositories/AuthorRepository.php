<?php

namespace App\Repositories;

use App\Models\Author;
use App\Repositories\BaseRepository;

/**
 * Class AuthorRepository
 * @package App\Repositories
 * @version January 31, 2024, 9:31 pm UTC
*/

class AuthorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Gender',
        'Age',
        'Country',
        'Genre'
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
        return Author::class;
    }
}

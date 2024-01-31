<?php

namespace App\Repositories;

use App\Models\Books;
use App\Repositories\BaseRepository;

/**
 * Class BooksRepository
 * @package App\Repositories
 * @version January 31, 2024, 9:09 pm UTC
*/

class BooksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'Isbn',
        'Author'
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
        return Books::class;
    }
}

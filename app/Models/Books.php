<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Books
 * @package App\Models
 * @version January 31, 2024, 9:09 pm UTC
 *
 * @property string $Name
 * @property string $Isbn
 * @property string $Author
 */
class Books extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Isbn',
        'Author'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Name' => 'string',
        'Isbn' => 'string',
        'Author' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required',
        'Isbn' => 'required',
        'Author' => 'required'
    ];

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Author
 * @package App\Models
 * @version January 31, 2024, 9:31 pm UTC
 *
 * @property string $Name
 * @property string $Gender
 * @property integer $Age
 * @property string $Country
 * @property string $Genre
 */
class Author extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'authors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Name',
        'Gender',
        'Age',
        'Country',
        'Genre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Name' => 'string',
        'Gender' => 'string',
        'Age' => 'integer',
        'Country' => 'string',
        'Genre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

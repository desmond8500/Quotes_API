<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citation
 * @package App\Models
 * @version July 2, 2020, 11:20 pm UTC
 *
 * @property string $quote
 * @property string $author
 * @property string $tag
 */
class Citation extends Model
{
    use SoftDeletes;

    public $table = 'citations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'quote',
        'author',
        'tag'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'quote' => 'string',
        'author' => 'string',
        'tag' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

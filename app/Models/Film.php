<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Film
 * @package App\Models
 * @version September 13, 2020, 12:24 am UTC
 *
 * @property string $name
 * @property string $cover
 * @property string $description
 * @property string $type
 * @property string $file
 * @property string $status
 */
class Film extends Model
{
    use SoftDeletes;

    public $table = 'films';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'cover',
        'description',
        'type',
        'file',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'cover' => 'string',
        'description' => 'string',
        'type' => 'string',
        'file' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

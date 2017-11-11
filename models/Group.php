<?php namespace KEERill\Users\Models;

use Model;

/**
 * Group Model
 */
class Group extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'oc_users_groups';

    /**
     * Validation rules
     */
    public $rules = [
        'name' => 'required|between:3,64',
        'code' => 'required|regex:/^[a-zA-Z0-9_\-]+$/|unique:oc_users_groups',
    ];

    public $attributeNames = [
        'name' => 'Название группы',
        'code' => 'Код группы'
    ];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [        
        'code',
        'name'
    ];

    /**
     * @var array Relations
     */
    public $hasMany  = [
        'users'       => [
            'KEERill\Users\Models\User', 
            'table' => 'oc_users'
        ]
    ];

    public $jsonable = ['permissions'];

}

<?php namespace kEERill\Users\Models;

use Model;

/**
 * Permission Model
 */
class Permission extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'oc_users_permissions';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public $hasMany = [
        'users'       => ['kEERill\Users\Models\User'],
        'groups'      => ['kEERill\Users\Models\Group']
    ];
}
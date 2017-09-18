<?php namespace \Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $dateFormat = 'U';

    protected $connection = 'admin_db';

    public function __construct()
    {

    } 

    public function roles()
    {
        return $this->belongsToMany(
            \Modules\Admin\Models\Role::CLASS,
            'user_role_relation',
            'user_id',
            'role_id'
        );
    }
}
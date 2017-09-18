<?php namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    
    protected $dateFormat = 'U';
    
    protected $connection = 'admin_db';

    public function __construct()
    {

    }

    public function users()
    {
        return $this->belongsToMany(
            \Modules\Admin\Models\User::CLASS,
            'user_role_relation',
            'role_id',
            'user_id'
        );
    }

    public function permissions()
    {
        return $this->belongsToMany(
            \Modules\Admin\Models\Permission::CLASS,
            'role_permission_relation',
            'role_id',
            'permission_id'
        );
    }
}
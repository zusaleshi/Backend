<?php namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    
    protected $dateFormat = 'U';
    
    protected $connection = 'admin_db';

    public function __construct()
    {

    }

    public function roles()
    {
        return $this->belongsToMany(
            \Modules\Admin\Models\Permission::CLASS,
            'role_permission_relation',
            'permission_id',
            'role_id'
        );
    }

}
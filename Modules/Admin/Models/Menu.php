<?php namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    
    protected $dateFormat = 'U';
    
    protected $connection = 'admin_db';

    public function __construct()
    {
        
    }

    public function permission()
    {
        return $this->belongsTo(
            \Modules\Admin\Models\Permission::CLASS,
            'permission_id',
            'id'
        );
    }
}

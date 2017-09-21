<?php namespace App\Widgets\Admin;

use \Modules\Admin\Models\Menu;
use Auth;

class MenuWidgets
{
    private $session;
    private $request;
    private $admin;

    public function __construct()
    {
        $this->admin = Auth::guard('admin');
    }

    public function menu()
    {
        $user = $this->admin->user();
    }
}
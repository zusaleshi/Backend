<?php namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    private $request;

    private $session;

    private $repository;

    public function __construct()
    {
        $this->request = request();

        $this->session = session();
    }

    public function homeAction()
    {
        return view('admin::index');
    }
}

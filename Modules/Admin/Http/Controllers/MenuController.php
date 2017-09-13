<?php namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    private $request;

    private $session;

    private $repository;

    public function __construct()
    {
        $this->request = request();

        $this->session = session();
    }

    public function listMenuAction()
    {

    }

    public function createMenuAction()
    {

    }

    public function editMenuAction()
    {

    }

    public function removeMenuAction()
    {

    }

    public function sortMenuAction()
    {

    }

    public function controlMenuAction()
    {

    }
}
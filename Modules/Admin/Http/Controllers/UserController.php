<?php namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Package\Common\ApiResponse;
use Auth;

class UserController extends Controller
{
    private $request;
    private $session;
    private $repository;

    public function __construct()
    {
        $this->request = request();
        $this->session = session();
        $this->repository = new \Modules\Admin\Repositories\UserRepository();
    }

    public function loginAction()
    {
        if($this->request->isMethod('get')) {
            return view('admin::user.login');
        } else {
            $user_info = $this->repository->verifyUser((array)$this->request->all());
            if($this->repository->hasError()) return ApiResponse::fail($this->repository->getErrorMsg(), 422);
            
            Auth::guard('admin')->loginUsingId($user_info['uid']);
            return ApiResponse::success('登录成功');
        }
    }

    public function logoutAction()
    {

    }

    public function registerAction()
    {

    }

    public function profileAction()
    {

    }
}
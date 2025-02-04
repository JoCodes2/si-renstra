<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Repositories\UserRepositories;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepo;
    public function __construct(UserRepositories $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    public function login(UserRequest $request)
    {
        return $this->userRepo->login($request);
    }
    public function logout(Request $request)
    {
        return $this->userRepo->logout($request);
    }
    public function getUser()
    {
        return $this->userRepo->getUser();
    }
    public function updateUser(Request $request)
    {
        return $this->userRepo->updateUser($request);
    }
}

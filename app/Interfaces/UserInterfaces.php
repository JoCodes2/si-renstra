<?php


namespace App\Interfaces;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

interface UserInterfaces
{
    public function login(UserRequest $request);
    public function logout(Request $request);
    public function getUser();
    public function updateUser(Request $request);
}

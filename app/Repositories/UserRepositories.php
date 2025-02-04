<?php

namespace App\Repositories;

use App\Http\Requests\UserRequest;
use App\Interfaces\UserInterfaces;
use App\Models\User;
use App\Traits\HttpResponseTraits;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;


class UserRepositories implements UserInterfaces
{
    use HttpResponseTraits;
    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function login(UserRequest $request)
    {
        try {
            if (!Auth::attempt($request->only('username', 'password'))) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Unauthorized'
                ], 401);
            } else {
                $user = $this->userModel::where('username', $request->username)->first();
                $user->createToken('token')->plainTextToken;
                return response()->json([
                    'status' => 'success',
                    'message' => 'Login success',
                ]);
            }
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }
    public function logout(Request $request)
    {
        try {
            $request->user('web')->tokens()->delete();
            Auth::guard('web')->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return response()->json([
                'status' => 'success',
                'message' => 'Logout success',
            ]);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }
    public function getUser()
    {
        $userId = Auth::id();

        $data = $this->userModel::find($userId);

        if (!$data) {
            return $this->idOrDataNotFound();
        } else {
            return $this->success($data);
        }
    }
    public function updateUser(Request $request)
    {
        try {
            $userId = Auth::id();
            $data = $this->userModel::find($userId);

            if (!$data) {
                return $this->idOrDataNotFound();
            }

            $updateData = $request->only(['name', 'position', 'username']);

            if ($request->filled('password')) {
                $updateData['password'] = bcrypt($request->password);
            }

            $data->update($updateData);

            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }
}

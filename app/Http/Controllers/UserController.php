<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = User::with('domicilio')->get()->map(function ($user){
            $user['edad'] = Carbon::parse($user->fecha_nacimiento)->age;
            return $user;
        });

        return response()->json($users);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $r)
    {
        dd($r);
        $user = User::create($r);
        return response()->json($user, 200);
    }
}

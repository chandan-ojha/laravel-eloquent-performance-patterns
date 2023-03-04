<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->with('company')
            ->orderBy('id','asc')
            ->simplePaginate();

        return view('users', ['users' => $users]);
    }
}

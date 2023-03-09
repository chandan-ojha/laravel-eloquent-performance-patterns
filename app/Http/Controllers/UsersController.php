<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*public function index()
    {
        $users = User::query()
            ->with('company')
            ->orderBy('id','asc')
            ->simplePaginate();

        return view('users', ['users' => $users]);
    }*/

    /*public function index()
    {
        $users = UserLogin::query()
            //->withLastLoginAt()
            //->withLastLoginIpAddress()
             ->withLastLogin()
            ->with('lastLogin')
            ->orderBy('name')
            ->paginate();

        return view('users', ['users' => $users]);
    }*/

    /*multi-column-searching*/
    public function multi_column_searching()
    {
        $users = User::query()
            ->search(request('search'))
            ->with('company')
            ->paginate();

        return view('users',['users'=>$users]);
    }

}

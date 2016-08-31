<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{

    public function index()
    {
        return view('users.index', compact('users'));
    }

    public function listar()
    {
        return \Response::json(User::all(), 200);
    }

}

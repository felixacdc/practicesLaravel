<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Core\Repositories\UserRepo;

class UserController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getUsers()
    {
        $users = $this->userRepo->getUsers();
        dd($users);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Incluye el trait de autenticar Usuarios
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminstratorsController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    protected $loginView = 'adminstrators.login';
    
}

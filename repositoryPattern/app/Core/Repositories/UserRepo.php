<?php 

namespace App\Core\Repositories;

use App\Core\Entities\User;

/**
* Repositorio de usuarios
*/
class UserRepo
{
    
    public function getUsers()
    {
        return User::select('*')
                ->get();
    }
}
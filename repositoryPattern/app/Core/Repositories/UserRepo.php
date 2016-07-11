<?php 

namespace App\Core\Repositories;

use App\Core\Entities\User;
use App\Core\Repositories\BaseRepo;

/**
* Repositorio de usuarios
*/
class UserRepo extends BaseRepo
{
    public function getModel()
    {
        return new User;
    }
}
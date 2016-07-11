<?php 

namespace App\Core\Repositories;

/**
* Repositorio de usuarios
*/
abstract class BaseRepo
{
    abstract public function getModel();

    public function getAllData()
    {
        return $this->getModel()->select('*')
                ->get();
    }
}
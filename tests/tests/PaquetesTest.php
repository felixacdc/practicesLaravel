<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaquetesTest extends TestCase
{
    /**
     * @group paquetes
     */

    public function testsDescripcionCosto()
    {
        $this->visit('paquetes/agregar')
                ->type("Paquete100", "Nombre")
                ->type("1200", "Costo")
                ->press('Agregar')
                ->see("Paquete100 ha sido agregado");
    }

    /**
     * @group paquetes
     */

    public function testsSinDescripcion()
    {
        $this->visit('paquetes/agregar')
                ->type("1200", "Costo")
                ->press('Agregar')
                ->see("El compo Nombre es obligatorio.");   
    }
}

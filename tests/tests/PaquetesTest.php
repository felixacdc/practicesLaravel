<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PaquetesTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    /**
     * @group paquetes
     */

    public function testsDescripcionCosto()
    {
        $data = [
            'nombre'      =>  'Paquete100',
            'costo'     =>  1200
        ];

        $this->post('paquetes/agregar', $data)
                ->see("Paquete100 ha sido agregado");
    }

    /**
     * @group paquetes
     */

    public function testsSinDescripcion()
    {
        $data = [
            'nombre'      =>  'Paquete100'
        ];

        $this->post('paquetes/agregar', $data)
                ->see("El compo Nombre es obligatorio.");   
    }
}

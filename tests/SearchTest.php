<?php

use PHPUnit\Framework\TestCase;
use forg1v3n\CepSearch\Search;

class SearchTest extends TestCase{
    public function testGetAddressFromZipCodeDefaultUsage(){
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipCode('86730000');

        $esperado = [
            
                "cep" => "86730-000",
                "logradouro" => "",
                "complemento" => "",
                "bairro" => "",
                "localidade" => "Astorga",
                "uf" => "PR",
                "unidade" => "",
                "ibge" => "4102109",
                "gia" => "",
        ];

        $this->assertEquals($esperado, $resultado);

    }
}


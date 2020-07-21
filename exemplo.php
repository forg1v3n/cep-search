<?php

require_once "vendor/autoload.php";

use forg1v3n\CepSearch\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('86730000');

print_r($resultado);
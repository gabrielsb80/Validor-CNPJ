<?php

use App\Validation\CNPJ;

$resultado = CNPJ::validar("36.331.279/0001-33");

var_dump($resultado);
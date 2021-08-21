<?php

require __DIR__.'/vendor/autoload.php';

use \App\WebService\ViaCEP;

$dadosCEP = ViaCEP::consultarCEP('01001000');

print_r($dadosCEP);


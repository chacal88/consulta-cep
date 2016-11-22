<?php

namespace CepConsulta\Service\Factory;

use CepConsulta\Service\CepServiceConsult;
use Interop\Container\ContainerInterface;

class CepServiceConsultFactory
{

    public function __invoke(ContainerInterface $container)
    {
        return new CepServiceConsult();
    }

}
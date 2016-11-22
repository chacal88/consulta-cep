<?php

namespace CepConsulta\Controller\Factory;

use CepConsulta\Controller\ConsultaController;
use CepConsulta\Service\CepServiceConsult;
use Interop\Container\ContainerInterface;

class ConsultaControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $veiculoService = $container->get(CepServiceConsult::class);

        return new ConsultaController($veiculoService);
    }

}
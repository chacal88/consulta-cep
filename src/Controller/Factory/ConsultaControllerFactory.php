<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace CepConsulta\Controller\Factory;

use CepConsulta\Controller\ConsultaController;
use CepConsulta\Service\CepServiceConsult;
use Interop\Container\ContainerInterface;

/**
 * Class ConsultaControllerFactory
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package CepConsulta\Controller\Factory
 */
class ConsultaControllerFactory
{

    /**
     * __invoke
     *
     * @param ContainerInterface $container
     * @return ConsultaController
     */
    public function __invoke(ContainerInterface $container)
    {
        $veiculoService = $container->get(CepServiceConsult::class);

        return new ConsultaController($veiculoService);
    }

}
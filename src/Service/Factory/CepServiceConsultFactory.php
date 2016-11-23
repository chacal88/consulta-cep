<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace CepConsulta\Service\Factory;

use CepConsulta\Service\CepServiceConsult;
use Interop\Container\ContainerInterface;

/**
 * Class CepServiceConsultFactory
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package CepConsulta\Service\Factory
 */
class CepServiceConsultFactory
{

    /**
     * __invoke
     *
     * @param ContainerInterface $container
     * @return CepServiceConsult
     */
    public function __invoke(ContainerInterface $container)
    {
        return new CepServiceConsult();
    }

}
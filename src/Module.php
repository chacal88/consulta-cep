<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace CepConsulta;

use CepConsulta\Controller\ConsultaController;
use CepConsulta\Controller\Factory\ConsultaControllerFactory;
use CepConsulta\Service\CepServiceConsult;
use CepConsulta\Service\Factory\CepServiceConsultFactory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

/**
 * Class Module
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package CepConsulta
 */
class Module implements ServiceProviderInterface, ConfigProviderInterface, ControllerProviderInterface
{

    /**
     * getConfig
     *
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . "/../config/module.config.php";
    }

    /**
     * getServiceConfig
     *
     * @return array
     */
    public function getServiceConfig()
    {
        return [
            'factories' => [
                CepServiceConsult::class => CepServiceConsultFactory::class
            ]
        ];
    }

    /**
     * getControllerConfig
     *
     * @return array
     */
    public function getControllerConfig()
    {
        return [
            'factories' => [
                ConsultaController::class => ConsultaControllerFactory::class
            ]
        ];
    }

}
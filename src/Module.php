<?php


namespace CepConsulta;


use CepConsulta\Controller\ConsultaController;
use CepConsulta\Controller\Factory\ConsultaControllerFactory;
use CepConsulta\Service\CepServiceConsult;
use CepConsulta\Service\Factory\CepServiceConsultFactory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ServiceProviderInterface, ConfigProviderInterface, ControllerProviderInterface
{

    public function getConfig()
    {
        return include __DIR__ . "/../config/module.config.php";
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                CepServiceConsult::class => CepServiceConsultFactory::class
            ]
        ];
    }

    public function getControllerConfig()
    {
        return [
            'factories' => [
                ConsultaController::class => ConsultaControllerFactory::class
            ]
        ];
    }

}
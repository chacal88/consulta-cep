<?php


namespace CepConsulta\Controller;


use CepConsulta\Service\CepServiceConsult;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class ConsultaController extends AbstractRestfulController
{
    /**
     * @var CepServiceConsult
     */
    private $cepServiceConsult;


    /**
     * ConsultaController constructor.
     */
    public function __construct(CepServiceConsult $cepServiceConsult)
    {
        $this->cepServiceConsult = $cepServiceConsult;
    }

    public function get($cep)
    {
        $endereco = $this->cepServiceConsult->consultaCep($cep);

        return new JsonModel(['status' => 'ok', 'data' => $endereco]);
    }
}
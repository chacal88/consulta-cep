<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace CepConsulta\Controller;

use CepConsulta\Service\CepServiceConsult;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

/**
 * Class ConsultaController
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package CepConsulta\Controller
 */
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

    /**
     * get
     *
     * @param mixed $cep
     * @return JsonModel
     */
    public function get($cep)
    {
        $endereco = $this->cepServiceConsult->consultaCep($cep);

        return new JsonModel(['status' => 'ok', 'data' => $endereco]);
    }
}
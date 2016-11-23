<?php
/**
 * Copyright (c) 2016 , Kaue Rodrigues All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted,:
 *
 */

namespace CepConsulta\Service;

/**
 * Class CepServiceConsult
 *
 * @author Kaue Rodrigues <kauemsc@gmail.com>
 *
 * @package CepConsulta\Service
 */
class CepServiceConsult
{

    /**
     * consultaCep
     *
     * @param $cep
     * @return mixed
     */
    public function consultaCep($cep)
    {
        $token = 'd4741c714a60bd9227518357838bde83';
        $url = 'http://www.cepaberto.com/api/v2/ceps.json?cep=' . $cep;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Token token="' . $token . '"'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);

        $result = json_decode($output, 1);

        return $result;
    }

}
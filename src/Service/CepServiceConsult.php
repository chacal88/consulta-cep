<?php


namespace CepConsulta\Service;


class CepServiceConsult
{

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
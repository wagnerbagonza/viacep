<?php

namespace App\WebService;

class ViaCEP {

    /**
     * Método responsável por cosultar um CEP no Via CEP
     * @param string $cep
     * @return array
     */
    public static function consultarCEP($cep){
        $curl = curl_init();

        curl_setopt_array($curl,[
            CURLOPT_URL => 'http://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        $array = json_decode($response,true);

        return isset($arrya['cep']) ? $array : null;
    }

}
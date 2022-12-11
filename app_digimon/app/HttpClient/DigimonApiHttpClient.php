<?php

namespace App\HttpClient;

use Illuminate\Support\Facades\Http;

class DigimonApiHttpClient
{
    const API_BASE_URL = 'https://digimon-api.vercel.app/api';

    /**
    * Makes a GET request to digimon-api in Vercel and
    * get a list of all digimons
    *
    * @return json
    **/
    public function getDigimons()
    {
        $url = $this::API_BASE_URL . '/digimon';

        return Http::get($url)->json();
    }

    /**
    * Makes a GET request to digimon-api in Vercel and
    * get a list of all digimons by a given level
    *
    * @return json
    **/
    public function getDigimonsByLevel(string $level)
    {
        $url = $this::API_BASE_URL . '/digimon/level/' . $level;

        return Http::get($url)->json();
    }

    /**
    * Makes a GET request to digimon-api in Vercel and
    * get a single digimon by a given name
    *
    * @return json
    **/
    public function getDigimonByName(string $name)
    {
        $url = $this::API_BASE_URL . '/digimon/name/' . $name;

        return Http::get($url)->json();
    }

    /**
    * Fill data response with server error code and message
    *
    * @param array &$responseData | array of data to be returned in response
    * @param array &$responseCode | code to be returned in the response
    *
    * @return void
    **/
    public function serverErrorResponse(&$responseData, &$responseCode)
    {
        $responseData['error'] = 'SERVER_ERROR';
        $responseData['message'] = 'API request fail';
        $responseCode = 500;
    }
}

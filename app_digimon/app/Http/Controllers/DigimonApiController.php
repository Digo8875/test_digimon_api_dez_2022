<?php

namespace App\Http\Controllers;

use App\HttpClient\DigimonApiHttpClient;
use Illuminate\Http\Request;

class DigimonApiController extends Controller
{
    /**
    * List all Digimons on digimon-api in Vercel
    *
    * @return json
    **/
    public function getDigimons()
    {
        $responseData = [];
        $responseCode = 200;

        try {
            $digimonClient = new DigimonApiHttpClient();
            $responseData['data'] = $digimonClient->getDigimons();
        } catch (\Exception $e) {
            $digimonClient->serverErrorResponse($responseData, $responseCode);
        }

        return response()->json($responseData, $responseCode);
    }

    /**
    * List all Digimons by a given level name on digimon-api in Vercel
    *
    * @param string $level | digimon's level name to be search in API
    *
    * @return json
    **/
    public function getDigimonsByLevel(string $level)
    {
        $responseData = [];
        $responseCode = 200;

        try {
            $digimonClient = new DigimonApiHttpClient();
            $responseClient = $digimonClient->getDigimonsByLevel($level);

            if (isset($responseClient['ErrorMsg'])) {
                $responseData['error'] = 'DATA_NOT_FOUND';
                $responseData['message'] = $responseClient['ErrorMsg'];
                $responseCode = 404;
            } else {
                $responseData['data'] = $responseClient;
            }
        } catch (\Exception $e) {
            $digimonClient->serverErrorResponse($responseData, $responseCode);
        }

        return response()->json($responseData, $responseCode);
    }

    /**
    * Get a single Digimon by a given name on digimon-api in Vercel
    *
    * @param string $name | digimon's name to be search in API
    *
    * @return json
    **/
    public function getDigimonByName(string $name)
    {
        $responseData = [];
        $responseCode = 200;

        try {
            $digimonClient = new DigimonApiHttpClient();
            $responseClient = $digimonClient->getDigimonByName($name);

            if (isset($responseClient['ErrorMsg'])) {
                $responseData['error'] = $responseClient['ErrorMsg'];
                $responseCode = 400;
            } else {
                $responseData['data'] = $responseClient[0];
            }
        } catch (\Exception $e) {
            $digimonClient->serverErrorResponse($responseData, $responseCode);
        }

        return response()->json($responseData, $responseCode);
    }
}

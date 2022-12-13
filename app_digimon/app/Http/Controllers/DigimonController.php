<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

class DigimonController extends Controller
{
    /**
    * Return the index view to the application
    *
    * @return view
    **/
    public function index()
    {
        return view('digimon.index');
    }

    /**
    * Return a partial view, with all digimons data, to be added in html
    * by self requesting API
    *
    * @return view
    **/
    public function getDigimons()
    {
        try{
            if ($this->isNginxDockerRequest()) {
                $responseData = Http::get('http://nginx/api/digimons')->json();
            } else {
                $request = Request::create('/api/digimons', 'GET');
                $responseData = json_decode(Route::dispatch($request)->getContent(), true);
            }

            return view('partials._mount_digimons', ['responseData' => $responseData]);
        } catch (\Exception $e) {
            return view('partials._no_data');
        }
    }

    /**
    * Return a partial view, with all digimons data by a given level name,
    * to be added in html by self requesting API
    *
    * @param string $level | digimon's level name to be search in API
    *
    * @return view
    **/
    public function getDigimonsByLevel(Request $request)
    {
        try{
            if ($this->isNginxDockerRequest()) {
                $responseData = Http::get('http://nginx/api/digimons/level/' . $request->level)->json();
            } else {
                $request = Request::create('/api/digimons/level/' . $request->level, 'GET');
                $responseData = json_decode(Route::dispatch($request)->getContent(), true);
            }

            return view('partials._mount_digimons', ['responseData' => $responseData]);
        } catch (\Exception $e) {
            return view('partials._no_data');
        }
    }

    /**
    * Return a partial view, with a single Digimon data by a given name,
    * to be added in html by self requesting API
    *
    * @param string $name | digimon's name to be search in API
    *
    * @return view
    **/
    public function getDigimonByName(Request $request)
    {
        try{
            if ($this->isNginxDockerRequest()) {
                $responseData = Http::get('http://nginx/api/digimon/name/' . $request->name)->json();
            } else {
                $request = Request::create('/api/digimon/name/' . $request->name, 'GET');
                $responseData = json_decode(Route::dispatch($request)->getContent(), true);
            }

            if (isset($responseData['data']) == false) {
                return view('partials._no_data');
            }

            return view('partials._mount_digimons', ['responseData' => $responseData]);
        } catch (\Exception $e) {
            return view('partials._no_data');
        }
    }

    /**
    * Checks if the applications is rinning by the nginx docker server or by
    * the laravel server, necessary to adjust the self request to API
    *
    * @return boolean
    **/
    private function isNginxDockerRequest()
    {
        $port = explode(':', url(''))[2];

        return $port == '8989';
    }
}

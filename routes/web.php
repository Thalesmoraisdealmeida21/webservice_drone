<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/*
 *
 *
 * ===========ROTAS A DEFINIR===================
 *
 * -> CAPTURA A COLETA
 * -> GRAVA NOVA RESIDENCIA
 * -> SINCRONIZA DADOS COM CENTRAL
 * -> RETORNA DATA E HORA DA ULTIMA COLETA
 * -> RETORNA CASOS DE FALHA
*/


/*Rota para adicionar nova residencia*/
$router->post('/storeResidence', 'ResidenciaController@store');
$router->get('/listResidences', 'ResidenciaController@listResidences');

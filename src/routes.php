<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');




$router->get('/fotos', 'HomeController@fotos');
$router->get('/foto/{id}', 'HomeController@foto');

$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
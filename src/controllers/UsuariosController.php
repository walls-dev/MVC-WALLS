<?php
namespace src\controllers;

use \core\Controller;

class UsuariosController extends Controller {

    public function add() {
        $this->render('add');
    }
    public function addAction() {
        echo "Recebido";
    }
}
<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
       
        
        $this->render('home');
        
    }
    public function sair(){

        $this->render('logout');
    }
    public function atividades(){
        $this->render('atividades');
    }
}

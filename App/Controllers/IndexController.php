<?php 

namespace App\Controllers; 

use AG\Controller\Action;

class IndexController extends Action {


    public function index(){

        $this->view->dados = array('Sofa', 'Cadeira', 'Cama');
        $this->render('index');
    }
    public function sobreNos(){
        $this->view->dados = array('Notebook', 'Smartphone');
        $this->render('sobreNos');
    }

   

}


?>